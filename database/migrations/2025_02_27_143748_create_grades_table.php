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
        Schema::create('grades', function (Blueprint $table) {
            $table->unsignedInteger('grade_id')->primary(); // Ensure grade_id is unsigned integer
            $table->string('name', 45); // Grade name
            $table->string('desc', 45)->nullable(); // Description (nullable)
            $table->timestamps(); // Created_at & updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};