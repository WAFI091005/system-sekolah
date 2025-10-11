<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanSekolah extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_sekolah';

    protected $fillable = [
        'dibuat_oleh',
        'judul',
        'deskripsi',
        'tanggal',
        'lokasi',
        'foto_kegiatan',
    ];
}
