<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileshares', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('title', 100);
			$table->text('description', 100);
            $table->integer('user_id');
            $table->string('hashlink', 100);
            $table->string('privhash', 100);
            $table->integer('pub_download');
            $table->integer('priv_download');
            $table->string('filename', 100);
            $table->string('filesize', 100);
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fileshares');
    }
}
