<div class="container mx-auto px-4 py-16">
    {{-- Judul Halaman --}}
    <div class="text-center mb-10">
        <h2 class="text-3xl font-extrabold text-gray-800">Semua Berita & Artikel</h2>
        <div class="w-24 h-1 bg-yellow-600 mx-auto mt-2"></div>
    </div>

    {{-- Pencarian --}}
    <div class="max-w-md mx-auto mb-10">
        <input type="text" wire:model="search" placeholder="Cari berita..."
            class="w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500">
    </div>

    @if ($beritas->isNotEmpty())
        {{-- Container Utama (Menggunakan Grid Otomatis untuk tata letak per baris) --}}
        <div class="grid grid-cols-1 gap-8">
            
            @foreach ($beritas->chunk(3) as $chunk)
                
                @php
                    $count = $chunk->count();
                    $isLastRow = $loop->last;
                    
                    // Tentukan kelas CSS untuk baris terakhir
                    $gridClasses = 'grid-cols-1 lg:grid-cols-3'; // Default 3 kolom
                    
                    if ($isLastRow) {
                        if ($count == 2) {
                            // Jika 2 item, gunakan 2 kolom di layar besar dan seimbangkan lebar
                            $gridClasses = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:gap-x-28'; 
                        } elseif ($count == 1) {
                            // Jika 1 item, gunakan 1 kolom penuh di tengah
                            $gridClasses = 'grid-cols-1 max-w-lg'; 
                        }
                    }
                @endphp

                {{-- Baris Grid yang Diadaptasi --}}
                <div class="grid gap-8 {{ $gridClasses }} {{ $count == 1 ? 'mx-auto' : '' }}">
                    @foreach($chunk as $berita)
                        {{-- Card Berita --}}
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="relative">
                                @php
                                    $publishedDate = $berita->published_at ? \Carbon\Carbon::parse($berita->published_at) : \Carbon\Carbon::parse($berita->created_at);
                                @endphp

                                @if($berita->featured_image)
                                    <img src="{{ asset($berita->featured_image) }}" class="w-full h-56 object-cover" alt="{{ $berita->title }}">
                                @else
                                    <div class="w-full h-56 bg-gray-100 flex items-center justify-center text-gray-500 text-sm font-medium">
                                        TANPA GAMBAR
                                    </div>
                                @endif

                                {{-- Tanggal Melayang --}}
                                <div class="absolute bottom-3 left-3 bg-blue-900/90 px-4 py-3 text-center">
                                    <span class="block text-2xl font-extrabold text-yellow-400">{{ $publishedDate->format('d') }}</span>
                                    <span class="block text-xs font-semibold text-yellow-400">{{ $publishedDate->format('M, Y') }}</span>
                                </div>
                            </div>

                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug">{{ $berita->title }}</h3>
                                <p class="text-sm text-gray-700 mb-4 line-clamp-3">{{ $berita->excerpt }}</p>
                                <a href="{{ $berita->read_more_url }}"
                                    class="text-green-600 font-semibold text-sm hover:underline"
                                    @if($berita->type === 'external') target="_blank" @endif>
                                    Baca Selengkapnya &raquo;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @else
        <p class="col-span-3 text-center text-gray-500 text-lg py-10">Belum ada berita yang dipublikasikan.</p>
    @endif
</div>