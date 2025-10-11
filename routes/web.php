<?php

use Livewire\Volt\Volt;
use App\Livewire\GuruIndex;
use App\Livewire\BeritaIndex;
use Laravel\Fortify\Features;
use App\Livewire\JurusanIndex;
use App\Livewire\KegiatanIndex;
use App\Livewire\PengumumanIndex;
use App\Livewire\EkstrakulikulerList;
use Illuminate\Support\Facades\Route;
use App\Livewire\EkstrakulikulerIndex;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SambutanController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

Route::get('/sambutan', [SambutanController::class, 'showFull'])->name('sambutan.full');
Route::get('/guru/{id}', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru', GuruIndex::class)->name('guru.index');

// Rute untuk menampilkan detail berita berdasarkan slug
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/berita', BeritaIndex::class)->name('berita.index');

// Opsional: Rute untuk menampilkan semua berita (jika belum ada)
Route::get('/postingan', [BeritaController::class, 'index'])->name('berita.index'); 

Route::get('/ekstrakulikuler', EkstrakulikulerIndex::class)
    ->name('ekstrakulikuler.index');

Route::get('/kegiatan', KegiatanIndex::class)->name('kegiatan.index');

Route::get('/pengumuman', PengumumanIndex::class)->name('pengumuman.index');


Route::get('/jurusan', JurusanIndex::class)->name('jurusan.index');

require __DIR__.'/auth.php';
