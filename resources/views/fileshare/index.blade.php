@extends('master')


@section('container')

	<a href="{{ route('fileshare.create')}}" class="btn btn-default pull-right">
		 <i class="fa fa-cloud-upload"></i> Upload File
	</a>
	
	<h1>File index</h1>
	
	
	
    @if(Session::has('success'))
		<div class="alert alert-success">{{Session::get('success')}}.
			Click <a href="{{Session::get('hashlink')}}/view"><b>here</b></a> to view</div>
	@elseif(Session::has('fail'))
		<div class="alert alert-danger">{{Session::get('fail')}}</div>
	@elseif(Session::has('warning'))
		<div class="alert alert-warning">{{Session::get('warning')}}</div>
	@endif
  
	
	
	
    
	@if ($files)
		<table class="table table-striped">
			<thead>
			  <tr>
				<th> </th>
				<th>Title</th>
				<th>Filesize</th>
				<th>Date Uploaded</th>
				<th>action</th>
			  </tr>
			</thead>
			<tbody>


				@foreach($files as $file)
				<tr>
					<td>
						<?php $fileExt = File::extension(public_path($file->filename)) ?>
					
					    @include('fileshare.file-icon', array('fileExt' => $fileExt ,'size' => '2x'))
						
					</td>
					<td>
						<a href="{{action('FilesharesController@view', $file['hashlink'])}}">
							{{$file['title']}}
						</a>
					</td>
					<td>{{$file['filesize']}}</td>
					<td>{{$file['created_at']}}</td>
					<td class="width-150">
					
					<form action="{{action('FilesharesController@destroy', $file['id'])}}" method="post" class="inline-block">
					<a href="{{action('FilesharesController@edit', $file['id'])}}" class="btn btn-default btn-sm">Edit</a>
					{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button class="btn btn-danger btn-sm" type="submit">Delete</button>
				  </form>
		  
		  
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		{{ $files->links() }}
  
      @else
		  <b>No File</b>
      @endif
    
@endsection