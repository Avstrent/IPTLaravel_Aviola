<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->integer('exam_result_id')->primary(); // exam_result_id (Primary Key)

            $table->integer('student_id');
            $table->integer('course_id');
          
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade'); 
           
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade'); 
            $table->string('marks', 45); // Marks obtained
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};