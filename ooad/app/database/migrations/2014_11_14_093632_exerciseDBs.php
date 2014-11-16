<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExerciseDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('exerciseDBs', function($table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('exercisename');
            $table->string('detail');
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
        Schema::drop('exerciseDBs');
	}

}
