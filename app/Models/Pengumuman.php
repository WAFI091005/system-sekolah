<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pengumuman extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika plural tidak sesuai)
    protected $table = 'pengumuman';

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'dibuat_oleh',
        'judul',
        'isi',
        'tanggal',
        'foto_pengumuman',
    ];

    // Relasi ke tabel users (pembuat pengumuman)
    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}
