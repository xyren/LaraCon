<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileshares;
use App\Mail\SharedFile;
use File;

class FilesharesController extends Controller
{
	public function view($hash = null){
		
		
		$file = Fileshares::
			where('hashlink','=',$hash)
			->orWhere('privhash','=',$hash)
			->get()->first();
		
		if($file){
			//dd($file);
			return view('fileshare.public', compact('file'));
		}else{
			return abort(404);
		}
		//return 'access publick hash --'.$hash;
	}
	public function download($hash = null){
		
		
		$file = Fileshares::
			where('hashlink','=',$hash)
			->orWhere('privhash','=',$hash)
			->get()->first();
		
		if($file){
			//update download counter
			$file->pub_download = ($file->pub_download + 1);
			$file->save();
			
			$file_name = preg_replace('/[^ \w-]/', '', $file->title);
			$_file = public_path($file->filename);
			$fileExt = File::extension(public_path($file->filename));
			
			return response()->download($_file, $file_name.'_'. time(). '.' .$fileExt);
		}else{
			return abort(404);
		}
	}
	
	
    public function index()
    {
		$userID = 12;
		$files = Fileshares::findFilesByUser($userID)->toArray();
		
		/* if(!$files){
			return $files;
		} */
		//$files = Fileshares::all()->toArray();
		//$files = Fileshares::find($id);
		//dd($files);
        //return view('fileshare.index', compact('files'));
        return view('fileshare.index')->with('files', Fileshares::paginate(10));
    }

    public function create()
    {
		return view('fileshare.create');
    }

    public function store(Request $request)
    {
		
		$this->validate($request, [
			'title' => 'required|min:5|max:55',
			'description' => 'required',
			'fileupload' => 'required|mimes:txt,zip,rar,pdf,doc,docx,jpeg,png,jpg,gif,svg|max:10000',
		],[
			'title.required' => 'The Title field is required.',
			'title.min' => 'The Title must be at least 5 characters.',
			'title.max' => 'The Title may not be greater than 55 characters.',
		]);
		
		
		
		$hashlink = md5(uniqid(rand(), true));
		$privhash = md5(uniqid(rand(), true));
		
		$fileName = $hashlink. 'xyR'. time().'.'.$request->fileupload->getClientOriginalExtension();
		
		// create dir for uploaded file
		$targetDIR = 'files/'.date('Y-m');
		$dirUpload = public_path($targetDIR);
		if(!is_dir($dirUpload )) mkdir($dirUpload );
		
        $request->fileupload->move($dirUpload, $fileName);
		
		//init user ID
		$userID = 12;
		
		$_filesizeRaw = filesize($dirUpload .'/'. $fileName);
		$_filesize = Fileshares::filesize_formatted($_filesizeRaw);
		
		$fileInfo = new Fileshares([
			'title' 		=> $request->get('title'), 
			'description' 	=> $request->get('description'), 
			'user_id' 		=> $userID,  
			'hashlink' 		=> $hashlink,
			'privhash' 		=> $privhash,
			'filename' 		=> $targetDIR .'/'. $fileName, 
			'filesize'		=> $_filesize,
		]);
		
		$fileInfo->save();
		
		/* 
		
		\Mail::to('jenner.alagao@gmail.com')->send(new SharedFile($fileInfo ));
		
		 */
		
	    //Session::flash('flash_message', 'Task successfully added!');
        return redirect('/fileshare')
			->with('success','Success Uploading File')
			->with('hashlink',$hashlink);
    }

    public function show($id)
    {
			echo 'test';
        //
    }

    public function edit($id)
    {
        $file = Fileshares::find($id);
        return view('fileshare.edit', compact('file','id'));
    }

    public function update(Request $request, $id)
    {
        //
		$file = Fileshares::find($id);
        $file->title = $request->get('title');
        $file->description = $request->get('description');
        $file->save();
        return redirect('/fileshare')->with('success','Changes success');
    }
    
	public function destroy($id)
    {
		$file = Fileshares::find($id);
		$file->delete();

		return back()->with('warning','Successfully delete');
		//return redirect('/fileshare')->with('warning','Successfully delete');
    }

}