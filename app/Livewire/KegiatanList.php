<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\KegiatanSekolah;

class KegiatanList extends Component
{
    public $kegiatans;

    public function mount()
    {
        $this->kegiatans = KegiatanSekolah::latest()->take(6)->get();
    }

    public function render()
    {
        return view('livewire.kegiatan-list');
    }
}
