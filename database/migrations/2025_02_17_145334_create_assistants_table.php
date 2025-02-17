<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssistantsTable extends Migration {

	public function up()
	{
		Schema::create('assistants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('phone')->nullable();
			$table->string('age')->nullable();
			$table->tinyInteger('gender');
			$table->string('whatsapp')->nullable();
			$table->string('telegram')->nullable();
			$table->string('facebook_link')->nullable();
			$table->integer('teacher_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('assistants');
	}
}