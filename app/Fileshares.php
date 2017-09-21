<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileshares extends Model
{
    // protect from mass assignment vulnerabilities
    protected $fillable = [ 
		'title', 
		'description', 
		'user_id', 
		'hashlink', 
		'privhash', 
		'pub_download', 
		'priv_download', 
		'filename', 
		'filesize'
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
	
	public static function filesize_formatted($size){
		$units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
		$power = $size > 0 ? floor(log($size, 1024)) : 0;
		//($size * .0009765625) * .0009765625
		return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
	}
	
	

}
