<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ekstrakulikuler; // Menggunakan Model yang sudah disesuaikan

class EkstrakulikulerList extends Component
{
    public $ekskuls;

    public function mount()
    {
        // Ambil 3 ekstrakurikuler teratas untuk ditampilkan di beranda
        $this->ekskuls = Ekstrakulikuler::limit(3)->get();
    }

    public function render()
    {
        return view('livewire.ekstrakulikuler-list');
    }
}