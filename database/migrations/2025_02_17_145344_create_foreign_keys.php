<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('parents', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('assistants', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quizes', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quizes', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('resources', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cerificates', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('parents', function(Blueprint $table) {
			$table->dropForeign('parents_teacher_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_teacher_id_foreign');
		});
		Schema::table('assistants', function(Blueprint $table) {
			$table->dropForeign('assistants_teacher_id_foreign');
		});
		Schema::table('quizes', function(Blueprint $table) {
			$table->dropForeign('quizes_teacher_id_foreign');
		});
		Schema::table('quizes', function(Blueprint $table) {
			$table->dropForeign('quizes_course_id_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_teacher_id_foreign');
		});
		Schema::table('resources', function(Blueprint $table) {
			$table->dropForeign('resources_course_id_foreign');
		});
		Schema::table('cerificates', function(Blueprint $table) {
			$table->dropForeign('cerificates_teacher_id_foreign');
		});
	}
}