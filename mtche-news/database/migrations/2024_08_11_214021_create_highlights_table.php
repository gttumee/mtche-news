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
        Schema::create('highlights', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');  
            $table->string('title_mn')->nullable();
            $table->string('title_jp')->nullable();
            $table->text('article')->nullable(); 
            $table->text('japanese');
            $table->string('image')->nullable(); 
            $table->string('flag')->default('0');  
            $table->string('writer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highlights');
    }
};