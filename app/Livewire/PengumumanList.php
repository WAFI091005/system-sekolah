<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengumuman;

class PengumumanList extends Component
{
    public $pengumuman; // deklarasi variabel publik

    public function mount()
    {
        // Ambil data saat komponen pertama kali dimuat
        $this->pengumuman = Pengumuman::latest()->get();
    }

    public function render()
    {
        // Tidak perlu kirim variabel lagi ke view
        return view('livewire.pengumuman-list');
    }
}
