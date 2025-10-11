<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guru;

class GuruIndex extends Component
{
    public $activeTab = 'guru';

    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        $gurus = Guru::all();

        return view('livewire.guru-index', [
            'gurus' => $gurus,
            'activeTab' => $this->activeTab,
        ])->layout('components.layout', [
            'title' => 'Data Guru & Staf',
        ]);
    }
}
