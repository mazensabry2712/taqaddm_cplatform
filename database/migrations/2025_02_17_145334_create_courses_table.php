<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->text('description')->nullable();
			$table->text('video')->nullable();
			$table->integer('teacher_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}