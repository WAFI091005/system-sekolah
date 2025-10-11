<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk mencegah duplikasi
        DB::table('jurusan')->truncate(); 

        $jurusan = [
            [
                'nama' => 'Teknik Bisnis Sepeda Motor (TBSM)',
                'deskripsi' => 'Teknik dan bisnis sepeda motor atau TBSM merupakan salah satu kompetensi keahlian dari program keahlian teknik otomotif dan Bina keahlian teknologi dan rekayasa.',
                // Menggunakan ikon Font Awesome seperti di view Anda
                'icon' => '<i class="fas fa-motorcycle text-4xl text-black"></i>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Teknik Komputer & Jaringan (TKJ)',
                'deskripsi' => 'Membekali siswa dengan keterampilan instalasi, konfigurasi, dan pemeliharaan jaringan komputer serta IT support sesuai standar industri dan bina keahlian teknologi.',
                'icon' => '<i class="fas fa-desktop text-4xl text-black"></i>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Multimedia (MM)',
                'deskripsi' => 'Mempelajari penggunaan software dan alat komunikasi digital untuk menciptakan konten visual, audio, dan interaktif yang profesional.',
                'icon' => '<i class="fas fa-camera-retro text-4xl text-black"></i>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('jurusan')->insert($jurusan);
    }
}