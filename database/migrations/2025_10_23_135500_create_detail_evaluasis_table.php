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
        Schema::create('detail_evaluasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluasi_kompetensi_id')->constrained('evaluasi_kompetensis')->onDelete('cascade');
            $table->integer('skor');
            $table->text('catatan')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_evaluasis');
    }
};
