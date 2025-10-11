<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guru;
use App\Models\Sambutan;
use App\Models\ProfilSekolah;

class SambutanKepsek extends Component
{
    public $kepsek;
    public $sambutan;
    public $profil;

    public function mount()
    {
        $this->kepsek = Guru::where('is_kepsek', true)->latest()->first();
        $this->sambutan = Sambutan::first();
        $this->profil = ProfilSekolah::first();
    }

    public function render()
    {
        return view('livewire.sambutan-kepsek', [
            'kepsek' => $this->kepsek,
            'sambutan' => $this->sambutan,
            'profil' => $this->profil
        ]);
    }
}
