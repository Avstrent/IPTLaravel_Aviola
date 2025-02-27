<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->integer('exam_id')->primary(); // exam_id (Primary Key)
            $table->integer('exam_type_id');
            $table->foreign('exam_type_id')->references('exam_type_id')->on('exam_types')->onDelete('cascade'); 
            $table->string('name', 45); // Exam Name
            $table->date('start_date'); // Exam Start Date
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};