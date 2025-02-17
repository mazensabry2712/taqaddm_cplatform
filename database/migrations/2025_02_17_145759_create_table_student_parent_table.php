<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_student_parent', function (Blueprint $table) {
            $table->id();
            $table->integer("student_id")->unsigned();
            $table->foreign("student_id")->references("id")->on("students")->onDelete("restrict")->onUpdate("restrict");
            $table->integer("parent_id")->unsigned();
            $table->foreign("parent_id")->references("id")->on("parents")->onDelete("restrict")->onUpdate("restrict");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_student_parent');
    }
};
