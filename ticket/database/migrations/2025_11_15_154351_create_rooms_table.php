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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('price_per_night')->nullable();
            $table->string('description')->nullable();
            $table->string('amenities')->nullable();
            $table->string('status')->nullable(); 
            $table->integer('room_size')->nullable(); 
            $table->string('bed_type')->nullable(); 
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
