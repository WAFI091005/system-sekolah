<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita;

class BeritaIndex extends Component
{
    public $search = '';

    public function render()
    {
        $beritas = Berita::where('title', 'like', '%' . $this->search . '%')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('livewire.berita-index', [
            'beritas' => $beritas,
        ])->layout('components.layout', [
            'title' => 'Semua Berita & Artikel',
        ]);
    }
}
