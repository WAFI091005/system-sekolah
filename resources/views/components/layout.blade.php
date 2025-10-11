<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>{{ $title ?? 'Sistem Informasi Sekolah' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100">

    {{-- Navbar / Header BARU --}}
    <header class="shadow-md sticky top-0 z-50">

        {{-- 1. Top Bar (Hijau Tua) - Informasi Kontak --}}
    <livewire:header-kontak /> 

        {{-- 2. Main Navbar (Putih) - Logo dan Menu --}}
        {{-- 2. Main Navbar (Putih) - Logo dan Menu --}}
        <nav class="bg-white py-3">
            <div class="container mx-auto px-4 flex justify-between items-center">
                {{-- Logo dan Nama Sekolah --}}
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Logo SMK Cendikia Perkasa"> 
                    <span class="text-2xl font-bold text-gray-800 hidden sm:block">
                        {{ $namaSekolah }}
                    </span>
                </a>

                {{-- Menu Navigasi (Desktop) --}}
                <div class="hidden lg:flex items-center space-x-6">
                    
                    {{-- Navigasi Link yang ke beranda (Menggunakan route) --}}
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-green-700 pb-1 text-green-700">
                        Beranda
                    </a>
                    
                    {{-- Profil (Tetap pakai hash karena ke section di halaman yang sama) --}}
                    <a href="{{ route('home') }}#profile" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-transparent hover:border-green-700 pb-1">
                        Profil
                    </a>
                    
                    {{-- Jadwal (Menggunakan route) --}}
                    {{-- Jadwal (Menggunakan route) --}}
                    <a href="{{ route('home') }}#program-keahlian" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-transparent hover:border-green-700 pb-1">
                        Jurusan
                    </a>
                    
                    {{-- Ekstrakulikuler (Diubah menjadi anchor ke halaman home) --}}
                    <a href="{{ route('home') }}#ekstrakulikuler" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-transparent hover:border-green-700 pb-1">
                        Ekstrakulikuler
                    </a>
                    
                    {{-- Visi dan Misi (Tetap pakai hash karena ke section di halaman yang sama) --}}
                    <a href="{{ route('home') }}#visimisi" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-transparent hover:border-green-700 pb-1">
                        Visi dan Misi
                    </a>
                    
                    {{-- Postingan (Menggunakan route) --}}
                    {{-- <a href="{{ route('postingan') }}" class="text-gray-600 hover:text-green-700 font-semibold transition duration-200 border-b-2 border-transparent hover:border-green-700 pb-1">
                        Postingan
                    </a> --}}
                    
                    {{-- Tombol Kontak (Menggunakan route) --}}
                    {{-- <a href="{{ route('kontak') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-green-700 transition duration-300 shadow-md">
                        Kontak
                    </a> --}}
                </div>

                {{-- Tombol Hamburger untuk Mobile --}}
                <button class="lg:hidden text-gray-600 hover:text-green-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </nav>
    </header>

    {{-- Konten dari halaman lain akan muncul di sini --}}
    <main class="py-0"> {{-- Hapus container mx-auto dari main agar konten welcome.blade yang punya container sendiri --}}
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <livewire:footer-component />

    @livewireScripts
</body>
</html>