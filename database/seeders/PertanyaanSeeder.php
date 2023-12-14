<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pertanyaan::create([
            'question' => '1. Menurut anda, apa luaran penting bagi lulusan (SMA/SMK/Perguruan Tinggi)
            yang anda harapkan [Maks. 2 pilihan]',
            'type' => 'checkbox'
        ]);
        Pertanyaan::create([
            'question' => '2. Menurut anda, apa permasalahan pendidikan di Indonesia? [Maks. 2 pilihan]',
            'type' => 'checkbox'
        ]);
        Pertanyaan::create([
            'question' => '3. Bagaimana kepuasan anda terkait pendidikan di Indonesia saat ini? [radio button]',
            'type' => 'radio'
        ]);
        Pertanyaan::create([
            'question' => '4. Sosok/karakter Calon Presiden yang anda harapkan untuk kemajuan pendidikan
            di Indonesia [Maks. pilih 2]',
            'type' => 'checkbox'
        ]);
        Pertanyaan::create([
            'question' => '5. Program kerja utama yang anda harapkan yang terkait dengan pendidikan [Maks. 2 pilihan]',
            'type' => 'checkbox'
        ]);
        Pertanyaan::create([
            'question' => '6. Harapan anda terhadap Calon Presiden 2024 secara umum [Maks. 2 pilihan]',
            'type' => 'checkbox'
        ]);
        Pertanyaan::create([
            'question' => '7. Siapa calon presiden yang anda prediksi mampu
            mencapai harapan anda di bidang pendidikan?',
            'type' => 'radio'
        ]);
    }
}
