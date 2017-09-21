<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

/* 
Route::resource('fileshare', 'FilesharesController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);

Route::get('/file/{action?}', function ($id = null) {
	if($id == null) return view('fileshare.index');
	echo " -- $id";
}); */