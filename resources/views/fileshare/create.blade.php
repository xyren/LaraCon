@extends('master')


@section('container')
	<h1>Create Form</h1>
	
	
	
 <form method="post" action="{{url('fileshare')}}" enctype="multipart/form-data">
 
 
 @if (count($errors) > 0)
                    <div class="alert alert-danger">
				
				{{ old('title') }}
				
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				
				
				
				
    <div class="form-group row  {{$errors->has('title') ? 'has-error' : ''}} ">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="{{ old('title') }}">
      </div>
	  <span class="text-danger">{{ $errors->first('title') }}</span>
	  
	  
    </div>
    <div class="form-group row {{$errors->has('description') ? 'has-error' : ''}} ">
	
      <label for="lgFormGroupText" class="col-sm-2 col-form-label col-form-label-sm">description</label>
      <div class="col-sm-10">
        <textarea name="description" id="lgFormGroupText" rows="8" cols="80">{{ old('description') }}</textarea>
      </div>
	  <span class="text-danger">{{ $errors->first('description') }}</span>
    </div>
	
	<div class="file-field input-field col s12">
		<div class="btn teal lighten-1">
			<span>File</span>
			<input type="file" name="fileupload">
		</div>
		
	</div>  
				
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
@endsection