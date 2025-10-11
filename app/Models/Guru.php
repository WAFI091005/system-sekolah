<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    
    // Memberitahu Laravel untuk menggunakan tabel tunggal 'guru'
    protected $table = 'guru'; 

    protected $fillable = [
        'nama',
        'mapel', // mata pelajaran / jabatan umum
        'foto',  // path/URL foto
        'is_kepsek', // KOLOM BARU untuk identifikasi Kepala Sekolah
    ];
    
    /**
     * Accessor untuk mendapatkan teks jabatan yang ditampilkan.
     * Jika is_kepsek TRUE, tampilkan 'Kepala Sekolah', jika FALSE, tampilkan mapel/jabatan normalnya.
     */
    public function getJabatanDisplayAttribute()
    {
        return $this->is_kepsek ? 'Kepala Sekolah' : $this->mapel;
    }
}
