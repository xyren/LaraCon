<?php


Route::get('/', function () { 
	
    return view('welcome');
});

/* 
Route::get('articles/{id}/edit',[
             'as'   =>'articles.edit',
             'uses' =>'YourController@yourMethod'
            ]);
<a href="{{ route('articles.edit',$article->id) }}">Edit</a> 

*/			

Route::resource('fileshare', 'FilesharesController', 
	['except' => ['view','download']]);

Route::get('/{hashlink}/view','FilesharesController@view');
Route::get('/{hashlink}/download','FilesharesController@download');


Auth::routes();

Route::get('/home', 'FilesharesController@index');
Route::get('logout','HomeController@logout');

