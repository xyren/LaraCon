@extends('master')

@section('title','Upload File')

@section('container')

	<a href="{{ url('/home') }}" class="btn btn-default pull-right">
		 <i class="fa fa-list"></i> Back to list
	</a>
	<h1>Upload File</h1>
	<br/>
	
	
	<form method="post" action="{{url('fileshare')}}" enctype="multipart/form-data">
 
 
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
				
				
		<div class="form-group row {{$errors->has('title') ? 'has-error' : ''}}">
		  {{csrf_field()}}
			<label for="txt_title" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control form-control-md" id="txt_title" placeholder="title" name="title" value="{{ old('title') }}">
				<span class="text-danger">{{ $errors->first('title') }}</span>
			</div>
		</div>
		
		<div class="form-group row {{$errors->has('description') ? 'has-error' : ''}} ">
			<label for="txt_description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
			<div class="col-sm-10">
				<textarea name="description" class="form-control form-control-md" id="txt_description" rows="8" cols="80">{{ old('description') }}</textarea>
				<span class="text-danger">{{ $errors->first('description') }}</span>
			</div>
		</div>
		
		<div class="form-group row {{$errors->has('fileupload') ? 'has-error' : ''}} ">
			<label for="in_fileupload" class="col-sm-2 col-form-label col-form-label-lg">File</label>
			<div class="col-sm-10">
			
				<div class="row">
					<div class="col-md-9">
					<label for="fileupload">
						<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-paperclip" aria-hidden="true"></i> Browse</button>
						</span>
						<input type="text" class="form-control" id="info" readonly="" style="background: #eee;" placeholder="Search for...">
						</div><!-- /input-group -->
					</label>
					</div><!-- /.col-lg-6 -->
					
					<input type="file" style="display: none;" onchange="$('#info').val($(this).val().split(/[\\|/]/).pop()); " name="fileupload" id="fileupload">

				</div>

				
				<span class="text-danger">{{ $errors->first('fileupload') }}</span>
				
				<script type="text/javascript">
					$(function() {
						$("label[for=fileupload]").click(function(event) {
							event.preventDefault();
							$("#fileupload").click();
						});
					});
				</script>
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