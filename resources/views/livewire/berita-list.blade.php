<div id="berita" class="container mx-auto px-4 py-16">
    {{-- Judul dan Garis Bawah --}}
    <div class="text-center mb-10">
        <h2 class="text-3xl font-extrabold text-gray-800">Berita & Artikel</h2>
        <div class="w-24 h-1 bg-yellow-600 mx-auto mt-2"></div>
    </div>
    
    <div class="grid md:grid-cols-2 gap-8">
        @forelse($beritas as $berita)
            {{-- Kartu Berita --}}
            {{-- MENGHAPUS 'border border-green-500' dan MENGGUNAKAN shadow-lg --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300"> 
                
                {{-- Area Gambar (Relative Container untuk Tanggal Absolut) --}}
                <div class="relative">
                    @php
                        $publishedDate = $berita->published_at ? \Carbon\Carbon::parse($berita->published_at) : \Carbon\Carbon::parse($berita->created_at);
                    @endphp

                    @if($berita->featured_image)
                        <img src="{{ asset($berita->featured_image) }}" class="w-full h-64 object-cover" alt="{{ $berita->title }}">
                    @else
                        <div class="w-full h-64 bg-gray-100 flex items-center justify-center text-gray-500 text-sm font-medium">
                            {{ $berita->type === 'external' ? 'LINK EKSTERNAL' : 'TANPA GAMBAR' }}
                        </div>
                    @endif

                    {{-- Kotak Tanggal Melayang (Absolute) --}}
                    {{-- Disesuaikan dengan bottom-4 dan left-4 --}}
                    <div class="absolute bottom-4 left-4 bg-blue-900/90 px-5 py-4 text-center leading-none"> 
                        {{-- Angka Hari: Kuning/Oranye Cerah --}}
                        <span class="block text-4xl font-extrabold text-yellow-400">{{ $publishedDate->format('d') }}</span> 
                        {{-- Bulan/Tahun: Kuning/Oranye Cerah --}}
                        <span class="block text-sm font-semibold text-yellow-400">{{ $publishedDate->format('M, Y') }}</span>
                    </div>
                </div>

                {{-- Konten Teks --}}
                <div class="p-6">
                    {{-- Judul --}}
                    <h3 class="text-xl font-bold text-gray-800 mb-3 leading-snug">{{ $berita->title }}</h3> 
                    
                    {{-- Paragraf Pendek Deskripsi --}}
                    <p class="text-sm text-gray-700 mb-4 leading-relaxed"> 
                        {{ $berita->excerpt }}
                    </p>
                    
                    {{-- Tautan "Read More" --}}
                    <a href="{{ $berita->read_more_url }}" 
                       class="text-blue-700 font-bold inline-block hover:text-blue-900 transition duration-150 text-sm"
                       @if($berita->type === 'external') target="_blank" @endif>
                        Read More &raquo;
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-2 text-center text-gray-500 text-lg py-10">Belum ada berita yang dipublikasikan.</p>
        @endforelse
    </div>
    
    <div class="mt-12 text-center">
        {{-- Tombol untuk melihat semua berita --}}
        <a href="{{ route('berita.index') }}" class="inline-block px-8 py-3 border-2 border-green-600 text-green-600 font-bold uppercase tracking-wider rounded-lg hover:bg-green-600 hover:text-white transition duration-300">
            TAMPILKAN SEMUA BERITA
        </a>
    </div>
</div>