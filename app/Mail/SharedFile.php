<?php

namespace App\Mail;


use App\Fileshares;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SharedFile extends Mailable
{
	
    use Queueable, SerializesModels;

	public $fileshare;
	
    public function __construct(Fileshares $fileshare)
    {
		$this->fileshare = $fileshare;
    }

    public function build()
    {
		$total = array('total' =>30);
		$address = 'ignore@batcave.io';
		$name = 'Ignore Me';
		$subject = 'Krytonite Found';

		
		//dd($this->fileshare);
		//return $this->view('fileshare.sharedfile');
		return $this->view('fileshare.sharedfile')
			->with([
				'filename' => $this->fileshare->filename,
				'filesize' => $this->fileshare->filesize,
			]);
    }
	
}
