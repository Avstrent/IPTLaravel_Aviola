<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->integer('classroom_id')->primary(); // Primary Key: classroom_id
            $table->year('year');
            $table->unsignedInteger('grade_id'); // Define as unsigned integer
            $table->foreign('grade_id')->references('grade_id')->on('grades')->onDelete('cascade'); 
            $table->char('section', 2);
            $table->boolean('status')->default(1);
            $table->string('remarks', 45)->nullable();
            $table->unsignedInteger('teacher_id'); // Define as unsigned integer
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};