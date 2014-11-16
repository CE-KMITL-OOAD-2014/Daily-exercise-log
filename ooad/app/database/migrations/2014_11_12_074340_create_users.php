<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('userDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('phone');
            $table->string('facebook');
            $table->timestamps();
 
            $table->unique('username');
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
        Schema::drop('userDBs');
	}

}
