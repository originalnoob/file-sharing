<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        //
		Schema::create('files', function (Blueprint $table) {
			$table->increments('id');
			$table->string('uploader_id')->nullable();
            $table->string('file_location')->nullable();
			$table->string('file_types')->nullable();
			$table->string('file_sizes')->nullable();
			$table->string('file_slugs')->nullable();
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
        //
		Schema::dropIfExists('files');
    }
}
