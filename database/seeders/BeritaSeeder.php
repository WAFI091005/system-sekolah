<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama
        DB::table('berita')->truncate(); 

        $beritas = [
            // Berita 1: Internal, seperti contoh gambar pertama
            [
                'type' => 'internal',
                'title' => 'SPMB 2025: SMK Cendikia Perkasa Terpilih Sebagai Sekolah Tinjauan...',
                'slug' => Str::slug('spmb-2025-smk-cendikia-perkasa-sekolah-tinjauan-' . Str::random(5)),
                'excerpt' => 'Rabu (' . (Carbon::now()->subDays(10)->format('d/m')) . '), SMK Cendikia Perkasa menerima kunjungan dari Kepala BBPPMPV Seni dan Budaya, Masrukhah...',
                'body' => 'Isi lengkap dari berita pertama. Ini adalah teks yang lebih panjang dan mendalam tentang kunjungan tersebut. Biasanya teks ini jauh lebih banyak daripada excerpt.',
                'featured_image' => 'images/berita/sekolah_tinjauan.jpg', // Ganti dengan path gambar Anda
                'external_url' => null,
                'published_at' => Carbon::now()->subDays(10)->startOfDay(), // 10 hari lalu
                'user_id' => 1, // Ganti dengan ID user yang valid
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Berita 2: Internal, seperti contoh gambar kedua
            [
                'type' => 'internal',
                'title' => 'Langkah Kecil, Dampak Besar: Teladan Charity Run 2025 Sukses...',
                'slug' => Str::slug('teladan-charity-run-2025-sukses-' . Str::random(5)),
                'excerpt' => 'SMK Cendikia Perkasa menggelar kegiatan istimewa bertajuk Teladan Manunggal Bhakti, dengan subprogram Teladan Charity Run 2025...',
                'body' => 'Isi lengkap dari berita kedua. Detail mengenai acara lari amal, jumlah donasi yang terkumpul, dan siapa saja yang berpartisipasi dalam acara tersebut.',
                'featured_image' => 'images/berita/charity_run.jpg',
                'external_url' => null,
                'published_at' => Carbon::now()->subDays(17)->startOfDay(), // 17 hari lalu
                'user_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Berita 3: Contoh Berita Eksternal
            [
                'type' => 'external',
                'title' => 'Kerja Sama Industri dengan PT Maju Jaya: Peluang Karir Baru',
                'slug' => Str::slug('kerja-sama-industri-pt-maju-jaya-' . Str::random(5)),
                'excerpt' => 'SMK Cendikia Perkasa menjalin kemitraan strategis dengan PT Maju Jaya. Baca selengkapnya di situs resmi partner kami.',
                'body' => null, // Tidak perlu body jika eksternal
                'featured_image' => 'images/berita/maju_jaya_partnership.jpg',
                'external_url' => 'https://www.majujaya.com/partnership',
                'published_at' => Carbon::now()->subDays(25)->startOfDay(), // 25 hari lalu
                'user_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('berita')->insert($beritas);
    }
}