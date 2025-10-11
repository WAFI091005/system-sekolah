<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengumuman;

class PengumumanIndex extends Component
{
    public $search = '';

    public function render()
    {
        $pengumuman = Pengumuman::where('judul', 'like', '%' . $this->search . '%')
            ->orWhere('isi', 'like', '%' . $this->search . '%')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('livewire.pengumuman-index', [
            'pengumuman' => $pengumuman,
        ])->layout('components.layout', [
            'title' => 'Daftar Pengumuman',
        ]);
    }
}
