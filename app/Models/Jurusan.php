<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sama dengan nama model jamak)
    protected $table = 'jurusan';

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'nama',
        'deskripsi',
        'icon',
    ];
}
