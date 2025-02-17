<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCerificatesTable extends Migration {

	public function up()
	{
		Schema::create('cerificates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->text('description')->nullable();
			$table->string('signature')->nullable();
			$table->string('file', 255)->nullable();
			$table->integer('teacher_id')->unsigned();
			$table->string('title')->nullable();
			$table->text('intro')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('cerificates');
	}
}