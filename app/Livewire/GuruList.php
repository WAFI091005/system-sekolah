<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guru;

class GuruList extends Component
{
    public $gurus;

    public function mount()
    {
        // Ambil hanya 4 data guru pertama dari database (untuk tampilan beranda)
        $this->gurus = Guru::take(4)->get();
    }

    public function render()
    {
        // Pastikan Anda sudah membuat view livewire.guru-list.blade.php
        return view('livewire.guru-list');
    }
}
