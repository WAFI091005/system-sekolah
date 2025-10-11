<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Tambahkan ini
use App\Models\ProfilSekolah;      // Tambahkan ini (Pastikan namespace model Anda benar)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View Composer untuk Navbar
        // Menargetkan components.layout (tempat <x-layout> berada)
        View::composer('components.layout', function ($view) {
            
            // Ambil data sekolah
            try {
                // Mencoba mengambil baris pertama dari tabel profil_sekolah
                $profilSekolah = ProfilSekolah::first(); 
                
                // Jika data ada, gunakan nama_sekolah; jika tidak, gunakan nama default
                $namaSekolah = $profilSekolah ? $profilSekolah->nama_sekolah : 'SMK Cendikia Perkasa';
            } catch (\Exception $e) {
                // Jika tabel belum di-migrate, gunakan nama default untuk mencegah error
                $namaSekolah = 'SMK Cendikia Perkasa';
            }

            // Suntikkan variabel $namaSekolah ke dalam view
            $view->with('namaSekolah', $namaSekolah);
        });
    }
}