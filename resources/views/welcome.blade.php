<x-layout>

    {{-- Hero Banner DIMULAI DARI SINI --}}
    <section class="relative">
        {{-- Ganti dengan gambar banner sekolah --}}
        <img src="{{ asset('images/logo.png') }}" class="w-full h-[550px] object-cover" alt="Banner Sekolah">
        
        {{-- Area Cari dan Teks di Tengah Banner --}}
        <div class="absolute inset-0 bg-black bg-opacity-20 flex flex-col justify-center items-center text-white p-4">
            {{-- Search Bar --}}
            <div class="w-full max-w-2xl mt-12 mb-20 md:mb-24">
                <div class="flex bg-white rounded-full shadow-xl overflow-hidden">
                    <input type="text" placeholder="Apa yang ingin anda cari?" class="w-full px-6 py-3 text-gray-700 focus:outline-none" />
                    <button class="px-6 py-3 bg-green-700 text-white font-semibold hover:bg-green-800 transition duration-300">
                        Cari
                    </button>
                </div>
            </div>
            
            {{-- Carousel Indicators --}}
            <div class="absolute bottom-6 flex space-x-2">
                <span class="block w-2 h-2 bg-white rounded-full opacity-50"></span>
                <span class="block w-2 h-2 bg-white rounded-full"></span>
                <span class="block w-2 h-2 bg-white rounded-full opacity-50"></span>
            </div>
        </div>
    </section>
    

    {{-- Sambutan Kepala Sekolah dan Teks Sekolah (SEKARANG DINAMIS DENGAN LIVEWIRE) --}}
    <section class="container mx-auto px-4 -mt-24 pb-12 relative z-10" id="profile">
        {{-- Komponen Livewire mengambil data Kepsek (Guru) dan Teks Sambutan (Sambutan) --}}
        @livewire('sambutan-kepsek')
    </section>


    {{-- Visi & Misi --}}
    <section class="bg-green-700 text-white py-12" id="visimisi">
        @livewire('visi-misi-list')
    </section>


    {{-- Program Keahlian --}}
    <section class="bg-green-700 text-white py-0 px-4 text-center" id="program-keahlian">
        @livewire('jurusan-list')
    </section>

    
    {{-- Berita & Artikel --}}
    <section class="container mx-auto py-12 px-4 text-center">
        @livewire('berita-list')
    </section>

    

    {{-- Agenda & Pengumuman --}}
    <section class="bg-green-700 py-12 px-4">
        <div class="container mx-auto grid md:grid-cols-2 gap-8">
            {{-- Agenda --}}
            @livewire('kegiatan-list') 

            {{-- Pengumuman --}}
            @livewire('pengumuman-list') 
        </div>
    </section>

    {{-- <livewire:ekstrakulikuler-list /> --}}

    <div id="ekstrakulikuler">
        <livewire:ekstrakulikuler-list />
    </div>

    {{-- Daftar Guru & Staff --}}
    <section class="container mx-auto py-12 px-4 text-center">
        <h2 class="text-3xl font-extrabold mb-10 text-gray-800">Daftar Guru & Staff</h2>
        
        {{-- List Guru --}}
        @livewire('guru-list') 
    </section>
</x-layout>
