<?php

use Illuminate\Database\Seeder;

class Fileshares extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('fileshares')->insert([
			'title' =>'test file', 
			'description' =>'test description',  
			'user_id' =>'1',  
			'hashlink' => 'secret',
			'privhash' => 'secret', 
			'filename' =>'files/2017/sample.jpg', 
			'filesize' =>'23KB',
			
        ]);
		
		
    }
}
