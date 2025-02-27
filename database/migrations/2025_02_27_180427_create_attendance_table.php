<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->date('date'); // Attendance date
            $table->integer('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade'); 
            $table->boolean('status'); // Attendance status (Present/Absent)
            $table->text('remark')->nullable(); // Additional remarks
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};