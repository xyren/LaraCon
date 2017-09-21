@extends('master')

@section('title','Error: Not Permitted')

@section('container')

	<a href="{{ url('/home') }}" class="btn btn-default pull-right">
		 <i class="fa fa-list"></i> Back to list
	</a>
	<h1>Error: Invalid File</h1>
	<br/>
	
	<p>The file your requesting is not valid.</p>

  @endsection