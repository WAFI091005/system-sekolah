<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ekstrakulikuler;

class EkstrakulikulerIndex extends Component
{
    public function render()
    {
        $ekskuls = Ekstrakulikuler::all();

        return view('livewire.ekstrakulikuler-index', [
            'ekskuls' => $ekskuls,
        ])->layout('components.layout', [
            'title' => 'Daftar Ekstrakulikuler',
        ]);
    }
}
