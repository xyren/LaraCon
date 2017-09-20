<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileshares extends Model
{
    // protect from mass assignment vulnerabilities
    protected $fillable = [ 
		'title', 'description', 'user_id', 'hashlink', 'privhash', 'filename', 'fileSize'
	];
	
	
	public static function findFilesBy($field, $value) {
		return static::where($field, (string)$value)->get();
	}
	public static function findFilesByUser($value) {
		return static::findFilesBy('user_id', $value);
	}
	public static function vall() {
		return static::all();
	}
	

}
