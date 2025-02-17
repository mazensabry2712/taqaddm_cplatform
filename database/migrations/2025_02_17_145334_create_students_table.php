<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('year');
			$table->integer('academic');
			$table->string('image')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('password');
			$table->tinyInteger('gender')->default('0');
			$table->integer('teacher_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}