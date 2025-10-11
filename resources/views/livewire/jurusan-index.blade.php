<div class="bg-green-700 text-gray-900 min-h-screen py-16">
    <div class="container mx-auto px-4">
        
        {{-- Judul Halaman --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-white mb-3">Semua Program Keahlian</h2>
            <p class="text-green-100 text-base">Kenali lebih dekat jurusan unggulan di SMK Cendikia Perkasa</p>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-3"></div>
        </div>

        {{-- Input Pencarian --}}
        {{-- <div class="max-w-md mx-auto mb-10">
            <input type="text" wire:model="search" placeholder="Cari jurusan..."
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-green-300">
        </div> --}}

        {{-- Grid Jurusan --}}
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
            @forelse($jurusans as $jurusan)
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center relative overflow-hidden hover:shadow-xl transition duration-300">
                    
                    {{-- Ikon di atas --}}
                    <div class="flex justify-center mb-6">
                        <div class="bg-green-100 text-green-700 rounded-full p-4 w-20 h-20 flex items-center justify-center text-4xl shadow-md">
                            {!! $jurusan->icon !!}
                        </div>
                    </div>

                    {{-- Nama Jurusan --}}
                    <h3 class="font-extrabold text-xl text-gray-800 mb-4">{{ $jurusan->nama }}</h3>

                    {{-- Deskripsi Jurusan --}}
                    <p class="text-sm text-gray-700 leading-relaxed mb-6">
                        {{ $jurusan->deskripsi }}
                    </p>

                    {{-- Tombol Detail (opsional) --}}
                    <a href="#" class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-800 transition duration-150">
                        Lihat Detail
                    </a>
                </div>
            @empty
                <p class="col-span-3 text-center text-white text-lg py-10">Belum ada data jurusan tersedia.</p>
            @endforelse
        </div>
    </div>
</div>
