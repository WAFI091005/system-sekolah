<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    
    // Memberi tahu Laravel untuk menggunakan tabel tunggal 'berita'
    protected $table = 'berita'; 

    protected $fillable = [
        'type', 'title', 'slug', 'body', 'excerpt', 
        'featured_image', 'external_url', 'published_at', 'user_id',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Accessor untuk mendapatkan URL 'Read More' yang benar.
     */
    public function getReadMoreUrlAttribute(): string
    {
        // Jika tipenya 'external', gunakan URL eksternal
        if ($this->type === 'external' && $this->external_url) {
            return $this->external_url;
        }
        
        // Jika tipenya 'internal', gunakan route internal
        // CATATAN: Pastikan Anda memiliki route bernama 'berita.show'
        return route('berita.show', $this->slug); 
    }
    
    // Relasi ke User (Penulis)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}