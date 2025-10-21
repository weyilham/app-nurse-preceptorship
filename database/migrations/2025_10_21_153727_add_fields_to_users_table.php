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
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->nullable();
            $table->string('phone')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('department')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('status_kerja')->nullable();
            $table->string('role')->default('user'); // contoh tambah role
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'alamat',
                'phone',
                'tanggal_lahir',
                'jenis_kelamin',
                'jabatan',
                'department',
                'tanggal_masuk',
                'status_kerja',
                'role',
            ]);
        });
    }
};
