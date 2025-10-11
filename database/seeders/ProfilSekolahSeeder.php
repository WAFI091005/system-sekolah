<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;

class ProfilSekolahSeeder extends Seeder
{
    public function run(): void
    {
        ProfilSekolah::create([
            'nama_sekolah' => 'SMK Cendikia Perkasa',
            'deskripsi' => "SMK Cendikia Perkasa Purbalingga adalah lembaga pendidikan menengah kejuruan berbasis keunggulan teknis dan karakter, dengan komitmen menyajikan generasi muda yang unggul dalam bidang solusi serta berwawasan keimanan.\n\nBerlokasi di Jalan Wali Perkasa Kav 1, Pekiringan, Karangmoncol, Purbalingga, sekolah ini berdiri tahun 2006. Dengan status akreditasi B, SMK Cendikia Perkasa menyelenggarakan pendidikan kejuruan yang memadukan kompetensi teknis sesuai kebutuhan dunia kerja dengan pengembangan karakter religius yang berlandaskan nilai keimanan.",
            'alamat' => 'Jalan Wali Perkasa Kav 1, Pekiringan, Karangmoncol, Purbalingga',
            'akreditasi' => 'B'
        ]);
    }
}
