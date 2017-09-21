@extends('master')


@section('container')

	<a href="{{ url()->previous() }}" class="btn btn-default pull-right">
		 <i class="fa fa-list"></i> Back to list
	</a>
	
	<h1>Public File</h1>

	<hr/>
	<div class="form-group row">
		<label for="txt_title" class="col-md-1 col-form-label col-form-label-lg">
			<?php $fileExt = File::extension(public_path($file->filename)) ?>
			<?php $fileMime = File::mimeType(public_path($file->filename)) ?>
			@include('fileshare.file-icon', array('fileExt' => $fileExt ,'size' => '4x'))
		</label>
						
		<div class="col-sm-10">
			<h3 class="nomargin text-primary">{{$file->title}}</h3>
			<p>
				Filesize: {{ $file->filesize}}<br>
				Mimetype: {{ $fileMime }}<br>
				Total Downloads: <b>{{ $file->pub_download }}</b><br>
				Date Upload: {{ $file->created_at }}
				<br>
			</p>
			<hr/>
			<p>{!! nl2br(e($file->description)) !!}</p>
			
			<b>Shareable link:</b>
			<input type="text" class="form-control form-block" readonly value="{{action('FilesharesController@view', $file['hashlink'])}}">
			
			<br/>
			
			<a class="btn btn-lg btn-primary" href="{{action('FilesharesController@download', $file['hashlink'])}}" title="Download File"><i class="fa fa-cloud-download fa-lg"></i> Download</a>
			
			
		</div>
	</div>
	
		
	
@endsection