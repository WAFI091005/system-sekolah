<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VisiMisi;

class VisiMisiList extends Component
{
    public $visi;
    public $misi;

    public function mount()
    {
        $data = VisiMisi::first();

        // JANGAN gunakan fallback string di sini. Biarkan null atau kosong.
        $this->visi = $data->visi ?? null; 
        $this->misi = $data->misi ?? null; 
    }

    public function render()
    {
        return view('livewire.visi-misi-list');
    }
}