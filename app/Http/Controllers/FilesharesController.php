<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileshares;
use App\Mail\SharedFile;

class FilesharesController extends Controller
{
	
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
		],[
			'title.required' => 'The Title field is required.',
			'title.min' => 'The Title must be at least 5 characters.',
			'title.max' => 'The Title may not be greater than 55 characters.',
		]);
		 
		$userID = 12;
		Fileshares::create( array(
			'title' 		=> $request->get('title'), 
			'description' 	=> $request->get('description'), 
			'user_id' 		=> $userID,  
			'hashlink' 		=> md5(uniqid(rand(), true)),
			'privhash' 		=> md5(uniqid(rand(), true)),
			'filename' 		=> 'files/2017/sample.jpg', 
			'fileSize'		=> '23KB', 
		));
		
		
		$fileInfo = new Fileshares([
			'title' 		=> $request->get('title'), 
			'description' 	=> $request->get('description'), 
			'user_id' 		=> $userID,  
			'hashlink' 		=> md5(uniqid(rand(), true)),
			'privhash' 		=> md5(uniqid(rand(), true)),
			'filename' 		=> 'files/2017/sample.jpg', 
			'fileSize'		=> '23KB',
		]);
		//$fileInfo = array( 'filename' => 'sample.jpg' , 'filesize' => '233KB');
		
		//not yet ready
		//\Mail::to('jenner.alagao@gmail.com')->send(new SharedFile($fileInfo ));
			
	    //Session::flash('flash_message', 'Task successfully added!');
        return redirect('/fileshare')->with('success','Success Uploading File');
		//return redirect()->back();
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