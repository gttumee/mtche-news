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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable()w;  
            $table->string('title_mn')->nullable();
            $table->string('title_jp')->nullable();
            $table->text('article')->nullable(); 
            $table->text('japanese')->nullable(); 
            $table->string('image')->nullable(); 
            $table->string('flag')->default('0'); 
            $table->string('writer')->nullable();  
            $table->string('contact')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};