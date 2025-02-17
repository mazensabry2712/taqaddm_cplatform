<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentsTable extends Migration {

	public function up()
	{
		Schema::create('parents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('age');
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->tinyInteger('gender');
			$table->string('password');
			$table->integer('teacher_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('parents');
	}
}