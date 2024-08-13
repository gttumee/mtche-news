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
        Schema::table('article_categories', function (Blueprint $table) {
            $table->renameColumn('flug', 'flag');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('article_categories', function (Blueprint $table) {
            $table->renameColumn('flag', 'flug');
        });
    }
};