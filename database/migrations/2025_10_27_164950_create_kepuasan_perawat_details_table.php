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
        Schema::create('kepuasan_perawat_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kepuasan_perawat_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('score1');
            $table->integer('score2');
            $table->integer('score3');
            $table->integer('score4');
            $table->integer('score5');
            $table->string('saran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepuasan_perawat_details');
    }
};
