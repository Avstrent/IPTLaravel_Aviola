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
        Schema::create('teachers', function (Blueprint $table) {
            $table->unsignedInteger("teacher_id")->primary();
            $table->string("email");
            $table->string("password");
            $table->string("fname");
            $table->string("lname");
            $table->date("dob");
            $table->string("phone");
            $table->string("mobile");
            $table->boolean("status");
            $table->date("last_login_date");
            $table->string("last_login_ip");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
