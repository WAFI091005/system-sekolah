<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;

class SambutanController extends Controller
{
    public function showFull()
    {
        // Ambil sambutan pertama dari database
        $sambutan = Sambutan::first();

        // Jika belum ada data sambutan, kita bisa redirect atau tampilkan pesan error
        if (!$sambutan) {
            return redirect()->back()->with('error', 'Sambutan belum tersedia.');
        }

        // Kirim ke view khusus sambutan penuh
        return view('pages.sambutan-full', compact('sambutan'));
    }
}
