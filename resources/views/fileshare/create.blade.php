@extends('master')


@section('container')
	<h1>Create Form</h1>
	
	
	
 <form method="post" action="{{url('fileshare')}}">
 
 
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
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">description</label>
      <div class="col-sm-10">
        <textarea name="description" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
@endsection