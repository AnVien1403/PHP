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
        Schema::create('library_management', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->integer('authored');
            $table->string('title', 55);
            $table->string('ISBN', 25);
            $table->smallInteger('pub_year', 6);
            $table->tinyInteger('available')->default(0); // Default value set to 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_management');
    }
};
