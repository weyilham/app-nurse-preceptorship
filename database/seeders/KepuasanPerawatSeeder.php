<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepuasanPerawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kepuasan_perawats')->insert([
            ['name' => 'Saya merasa didampingi dengan baik oleh preceptor'],
            ['name' => 'Feedback yang saya terima jelas dan membangun'],
            ['name' => 'Materi pembimbingan sesuai dengan kebutuhan saya'],
            ['name' => 'Saya lebih percaya diri setelah mengikuti program'],
            ['name' => 'Program membantu saya beradaptasi dengan tim kerja'],
            ['name' => 'Saya puas dengan durasi dan tahapan program'],
            ['name' => 'Secara keseluruhan, saya puas dengan program ini'],
        ]);
    }
}
