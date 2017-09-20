@extends('master')


@section('container')
	<h1>File index</h1>
	
	
	
    @if(Session::has('success'))
		<div class="alert alert-success">{{Session::get('success')}}.
			Click <a href="{{Session::get('hashlink')}}"><b>here</b> to view</div>
	@elseif(Session::has('fail'))
		<div class="alert alert-danger">{{Session::get('fail')}}</div>
	@elseif(Session::has('warning'))
		<div class="alert alert-warning">{{Session::get('warning')}}</div>
	@endif
  
	
	
	<a href="{{ route('fileshare.create')}}">Upload File</a>
    
	@if ($files)
		<table class="table table-striped">
			<thead>
			  <tr>
				<th>ID</th>
				<th>Title</th>
				<th>description</th>
			  </tr>
			</thead>
			<tbody>


				@foreach($files as $file)
				<tr>
					<td>{{$file['id']}}</td>
					<td>{{$file['title']}}</td>
					<td>{{$file['description']}}</td>
					<td>
					<a href="{{action('FilesharesController@edit', $file['id'])}}" class="btn btn-warning">Edit</a>
					</td>
					<td>
					
					<form action="{{action('FilesharesController@destroy', $file['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
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