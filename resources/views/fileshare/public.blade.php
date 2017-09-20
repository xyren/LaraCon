@extends('master')


@section('container')
	<h1>Public File</h1>

	{{$file->title}}<br>
	{{$file->description}}<br>
	{{$file->filesize}}<br>
	{{$file->filename}}<br>
	

@endsection