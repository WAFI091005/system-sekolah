<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // <--- Import ini WAJIB

class Sambutan extends Model // <--- Harus meng-extend Model
{
    use HasFactory;
    
    // Memberitahu Laravel untuk menggunakan tabel 'sambutan'
    protected $table = 'sambutan';
    
    // Kolom yang dapat diisi secara massal
    protected $fillable = ['title', 'content', 'excerpt'];
}
