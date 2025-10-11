<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler'; // Perhatikan 'ekstrakurikuler' bukan 'ekstrakulikuler'

    protected $fillable = [
        'nama_eskul',
        'pembimbing',
        'hari',
        'waktu',
        'tempat',
        'foto_eskul',
    ];
}