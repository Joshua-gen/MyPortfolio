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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // e.g. Frontend, Backend
            $table->string('stack')->nullable(); // e.g. MERN, LAMP
            $table->string('proficiency'); // Beginner, Intermediate, Advanced
            $table->float('experience_years')->nullable();
            $table->string('description')->nullable();
            $table->text('icon')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
