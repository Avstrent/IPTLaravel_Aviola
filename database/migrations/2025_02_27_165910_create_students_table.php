<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->primary(); // Use integer and make it primary
            $table->string('email', 45)->unique();
            $table->string('password', 255);
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15)->nullable();
        
            // Define the foreign key for the parent_id with integer type
            $table->unsignedInteger('parent_id'); // Define as unsigned integer
            $table->foreign('parent_id')->references('parent_id')->on('parents')->onDelete('cascade'); // Foreign key to parents table
        
            $table->date('date_of_join')->nullable();
            $table->boolean('status')->default(1);
            $table->date('last_login_date')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};