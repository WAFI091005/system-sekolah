<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita; // Pastikan menggunakan Model Berita

class BeritaList extends Component
{
    // Kita tidak menggunakan pagination di halaman utama, hanya ambil data terbaru
    public function render()
    {
        // Ambil 2 data berita terbaru yang sudah dipublikasikan
        $beritas = Berita::whereNotNull('published_at')
                         ->orderBy('published_at', 'desc')
                         ->take(2)
                         ->get(); 
        
        return view('livewire.berita-list', [
            'beritas' => $beritas,
        ]);
    }
}