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
        Schema::create('classroom_student', function (Blueprint $table) {

             // Define classroom_id as an unsigned big integer
            $table->integer('classroom_id');
        
        // Define student_id as an unsigned big integer
            $table->integer('student_id');
            // Define classroom_id as foreignId
            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms')->onDelete('cascade'); 
            
            // Define student_id as foreignId
          
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade'); 
            
            // Define a composite primary key for classroom_id and student_id
            $table->primary(['classroom_id', 'student_id']);
            
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('classroom_student');
    }
    
};
