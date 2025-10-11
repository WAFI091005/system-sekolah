<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sambutan; // Pastikan Model Sambutan sudah dibuat
use Illuminate\Support\Facades\DB;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan hanya ada SATU baris data sambutan
        // Kami menggunakan Sambutan::updateOrCreate untuk memastikan hanya ada satu record
        
        $data = [
            'title' => 'Sambutan Kepala Sekolah',
            'excerpt' => 'Assalamualaikum Wr. Wb. Segala puji hanya untuk Allah SWT dan sholawat serta salam semoga tercurah atas nabi yang terakhir, yaitu nabi kita Muhammad SAW. Begitu pula atas keluarga...',
            'content' => "Assalamualaikum Warahmatullahi Wabarakatuh.\n\nSelamat datang di website resmi SMK Cendikia Perkasa. Website ini merupakan jendela informasi bagi seluruh stakeholder, orang tua, dan calon siswa untuk mengenal lebih jauh visi, misi, dan program unggulan sekolah kami.\n\nKami berkomitmen menciptakan lulusan yang tidak hanya unggul dalam kompetensi teknis, tetapi juga memiliki karakter religius dan akhlak mulia. Mari bersama-sama membangun generasi emas yang siap menghadapi tantangan masa depan.\n\nWassalamualaikum Warahmatullahi Wabarakatuh.\n\nH. RUFFINO SURYAWAN S.E. (Kepala Sekolah)",
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Karena ini adalah tabel konfigurasi yang hanya boleh memiliki 1 record,
        // kita bisa menghapus semua yang lama dan membuat yang baru, atau 
        // menggunakan firstOrCreate/updateOrCreate.
        
        // Cek apakah data sudah ada (berdasarkan title)
        Sambutan::updateOrCreate(
            ['title' => 'Sambutan Kepala Sekolah'], // Kunci untuk mencari data
            $data
        );
    }
}
