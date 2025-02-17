<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	public function up()
	{
		Schema::create('resources', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->text('description')->nullable();
			$table->string('file', 255)->nullable();
			$table->integer('course_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('resources');
	}
}