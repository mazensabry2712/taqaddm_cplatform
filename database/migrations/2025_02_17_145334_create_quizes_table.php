<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizesTable extends Migration {

	public function up()
	{
		Schema::create('quizes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('teacher_id')->unsigned();
			$table->integer('course_id')->unsigned()->nullable();
			$table->string('name');
			$table->text('description')->nullable();
			$table->string('file')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('quizes');
	}
}