<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Jurusan;

class JurusanList extends Component
{
    public $jurusanList;

    public function mount()
    {
        // Batasi pengambilan data hanya 2 jurusan teratas
        $this->jurusanList = Jurusan::take(2)->get();
    }

    public function render()
    {
        return view('livewire.jurusan-list');
    }
}