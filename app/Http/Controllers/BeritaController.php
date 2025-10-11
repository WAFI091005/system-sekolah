<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // ... metode index() jika ada ...

    /**
     * Menampilkan satu artikel berita.
     */
    public function show(string $slug)
    {
        $berita = Berita::where('slug', $slug)
                        ->whereNotNull('published_at')
                        ->firstOrFail();

        // Di sini Anda akan mengembalikan view detail berita
        return view('berita.show', compact('berita')); 
    }
}