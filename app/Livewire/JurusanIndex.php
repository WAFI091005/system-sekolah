<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Jurusan;

class JurusanIndex extends Component
{
    public $search = '';

    public function render()
    {
        $jurusans = Jurusan::where('nama', 'like', '%' . $this->search . '%')
            ->orderBy('nama', 'asc')
            ->get();

        return view('livewire.jurusan-index', [
            'jurusans' => $jurusans,
        ])->layout('components.layout', [
            'title' => 'Semua Program Keahlian',
        ]);
    }
}
