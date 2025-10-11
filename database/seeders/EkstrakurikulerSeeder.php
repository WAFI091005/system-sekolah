<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk mencegah duplikasi saat seeding berulang
        DB::table('ekstrakurikuler')->truncate(); 

        $ekskuls = [
            [
                'nama_eskul' => 'TELADAN ROBOTIC CLUB (TRC)',
                'pembimbing' => 'Bpk. Ahmad Fauzi, S.Kom.',
                'hari' => 'Rabu',
                'waktu' => '15:30:00',
                'tempat' => 'Lab. Komputer 1',
                'foto_eskul' => null, // Biarkan null, atau masukkan path gambar jika sudah diupload
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_eskul' => 'English Conversation Club',
                'pembimbing' => 'Ibu Rina Lestari, S.Pd.',
                'hari' => 'Jumat',
                'waktu' => '14:30:00',
                'tempat' => 'Ruang Bahasa',
                'foto_eskul' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_eskul' => 'Pramuka Wira Cendikia',
                'pembimbing' => 'Bpk. Dani Setiawan',
                'hari' => 'Sabtu',
                'waktu' => '09:00:00',
                'tempat' => 'Lapangan Utama',
                'foto_eskul' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_eskul' => 'Futsal Club',
                'pembimbing' => 'Bpk. Rudi Santoso, S.Or.',
                'hari' => 'Selasa',
                'waktu' => '16:00:00',
                'tempat' => 'Lapangan Futsal',
                'foto_eskul' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ekstrakurikuler')->insert($ekskuls);
    }
}