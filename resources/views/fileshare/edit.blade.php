@extends('master')

@section('title','Edit Upload')

@section('container')

	<a href="{{ url('/fileshare') }}" class="btn btn-default pull-right">
		 <i class="fa fa-list"></i> Back to list
	</a>
	<h1>Edit Form</h1>
	<br/>
	
	
	<form method="post" action="{{action('FilesharesController@update', $id)}}">
	
	
	
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				Error while in process
				<?
				/* {{ old('title') }}
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul> 
				*/?>
			</div>
        @endif
		
		<div class="form-group row" style="background-color:#f5f5f5;padding:1.3em;margin-bottom:50px;border:1px solid #eee">
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
			</div>
		</div>
				
				
		<div class="form-group row {{$errors->has('title') ? 'has-error' : ''}}">
		  {{csrf_field()}}
		  
		  	<input name="_method" type="hidden" value="PATCH">
						 
			<label for="txt_title" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-md" id="txt_title" placeholder="title" name="title" value="{{ old( 'title', $file->title) }}">
				<span class="text-danger">{{ $errors->first('title') }}</span>
			</div>
		</div>
		
		<div class="form-group row {{$errors->has('description') ? 'has-error' : ''}} ">
			<label for="txt_description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
			<div class="col-sm-10">
				<textarea name="description" class="form-control form-control-md" id="txt_description" rows="8" cols="80">{{ old( 'description', $file->description) }}</textarea>
				<span class="text-danger">{{ $errors->first('description') }}</span>
			</div>
		</div>
		
		
		<div class="form-group row">
			<div class="col-md-2"></div>
			<div class="col-sm-10">
				<input type="submit" class="btn btn-primary width-150" value="Save File">
			</div>
		</div>
		
	
	
	
	</form>

  @endsection