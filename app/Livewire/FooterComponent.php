<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProfilSekolah;

class FooterComponent extends Component
{
    public $profil;

    public function mount()
    {
        $this->profil = ProfilSekolah::first();
    }

    public function render()
    {
        return view('livewire.footer-component');
    }
}