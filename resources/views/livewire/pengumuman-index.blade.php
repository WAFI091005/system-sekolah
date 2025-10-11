<div class="max-w-6xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Daftar Pengumuman Sekolah</h2>
    <div class="w-12 h-1 bg-green-500 mx-auto mb-10"></div>

    @if ($pengumuman->isNotEmpty())
        {{-- Container Utama (Menggunakan Grid Otomatis untuk tata letak per baris) --}}
        <div class="grid grid-cols-1 gap-8">
            
            @foreach ($pengumuman->chunk(3) as $key => $chunk)
                
                @php
                    $count = $chunk->count();
                    $isLastRow = $loop->last;
                    
                    // Tentukan kelas CSS untuk baris terakhir
                    $gridClasses = 'grid-cols-1 lg:grid-cols-3'; // Default 3 kolom
                    
                    if ($isLastRow) {
                        if ($count == 2) {
                            // Jika 2 item, gunakan 2 kolom dan ratakan tengah/seimbangkan lebar
                            // Gunakan gap-x-28 untuk menyebar card, meniru tampilan baris dua
                            $gridClasses = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:gap-x-28'; 
                        } elseif ($count == 1) {
                            // Jika 1 item, gunakan 1 kolom penuh di tengah
                            $gridClasses = 'grid-cols-1 max-w-md'; 
                        }
                    }
                @endphp

                {{-- Baris Grid yang Diadaptasi --}}
                <div class="grid gap-8 {{ $gridClasses }} {{ $count == 1 ? 'mx-auto' : '' }}">
                    @foreach($chunk as $item)
                        
                        {{-- Card Pengumuman --}}
                        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 w-full {{ $count == 1 ? 'max-w-md' : '' }} border-t-4 border-green-600">
                            
                            @if($item->foto_pengumuman)
                                <img src="{{ asset('storage/'.$item->foto_pengumuman) }}" 
                                     alt="{{ $item->judul }}" 
                                     class="w-full h-40 object-cover">
                            @else
                                <div class="w-full h-40 bg-gray-200 flex items-center justify-center p-4">
                                    <p class="text-sm text-gray-500 text-center line-clamp-4">{{ $item->isi }}</p>
                                </div>
                            @endif

                            <div class="p-4">
                                <h4 class="text-base font-semibold text-gray-800 mb-1 hover:text-green-600 line-clamp-2">
                                    {{ $item->judul }}
                                </h4>
                                <p class="text-sm text-gray-600 mb-2 line-clamp-3">
                                    {{ Str::limit(strip_tags($item->isi), 100, '...') }}
                                </p>
                                <p class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mt-10">Belum ada pengumuman tersedia.</p>
    @endif
</div>