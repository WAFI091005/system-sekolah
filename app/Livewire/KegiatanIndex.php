<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\KegiatanSekolah;

class KegiatanIndex extends Component
{
    public $search = '';

    public function render()
    {
        $kegiatans = KegiatanSekolah::where('judul', 'like', '%' . $this->search . '%')
            ->orderBy('tanggal', 'asc')
            ->get();

        return view('livewire.kegiatan-index', [
            'kegiatans' => $kegiatans,
        ])->layout('components.layout', [
            'title' => 'Agenda Sekolah',
        ]);
    }
}
