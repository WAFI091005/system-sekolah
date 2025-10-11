<?php

namespace App\Livewire; // <--- INI PENTING, HARUS App\Livewire

use Livewire\Component;
use App\Models\ProfilSekolah;

class HeaderKontak extends Component
{
    public $no_hp;
    public $email;
    public $alamat;

    public function mount()
    {
        $profil = ProfilSekolah::first();

        if ($profil) {
            $this->no_hp = $profil->no_hp ?? '-';
            $this->email = $profil->email ?? '-';
            $this->alamat = $profil->alamat ?? '-';
        } else {
            $this->no_hp = '-';
            $this->email = '-';
            $this->alamat = '-';
        }
    }

    public function render()
    {
        // View Path: resources/views/livewire/header-kontak.blade.php
        return view('livewire.header-kontak'); 
    }
}