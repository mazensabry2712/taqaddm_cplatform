<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('type');
			$table->string('image')->nullable();
			$table->integer('age');
			$table->tinyInteger('gender')->default('0');
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('cv')->nullable();
			$table->text('facebook_link')->nullable();
			$table->text('twitter_link')->nullable();
			$table->text('insta_link')->nullable();
			$table->text('tiktok_link')->nullable();
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}