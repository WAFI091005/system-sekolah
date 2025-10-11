<div class="max-w-6xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Agenda Sekolah</h2>
    <div class="w-12 h-1 bg-green-500 mx-auto mb-10"></div>

    @if ($kegiatans->isNotEmpty())
        {{-- Container Utama (Menggunakan Grid Otomatis untuk tata letak yang konsisten) --}}
        <div class="grid grid-cols-1 gap-8">
            
            @foreach ($kegiatans->chunk(3) as $key => $chunk)
                
                @php
                    $count = $chunk->count();
                    $isLastRow = $loop->last;
                    
                    // Tentukan kelas CSS untuk baris terakhir
                    $gridClasses = 'grid-cols-1 lg:grid-cols-3'; // Default 3 kolom
                    
                    if ($isLastRow) {
                        if ($count == 2) {
                            // Jika 2 item, gunakan 2 kolom dan ratakan tengah (atau sesuaikan lebar)
                            $gridClasses = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:gap-x-28'; 
                        } elseif ($count == 1) {
                            // Jika 1 item, gunakan 1 kolom penuh di tengah
                            $gridClasses = 'grid-cols-1 max-w-lg'; 
                        }
                    }
                @endphp

                {{-- Baris Grid yang Diadaptasi --}}
                <div class="grid gap-8 {{ $gridClasses }} {{ $count == 1 ? 'mx-auto' : '' }}">
                    @foreach($chunk as $kegiatan)
                        
                        {{-- Card Kegiatan --}}
                        <div class="bg-gray-50 rounded-xl p-5 w-full shadow-md hover:shadow-lg transition duration-300 border-t-4 border-green-600">
                            <div class="flex items-start">
                                
                                {{-- Kolom tanggal besar --}}
                                <div class="flex-shrink-0 text-center w-20 h-20 bg-green-700 text-white rounded-lg flex flex-col items-center justify-center mr-4">
                                    <span class="text-xs font-semibold uppercase">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('D') }}</span>
                                    <span class="text-2xl font-extrabold">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d') }}</span>
                                    <span class="text-[10px] font-semibold uppercase -mt-1">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('M Y') }}</span>
                                </div>

                                {{-- Detail kegiatan --}}
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-800">{{ $kegiatan->judul }}</h4>
                                    <p class="text-sm text-gray-600 mt-1 flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        {{ \Carbon\Carbon::parse($kegiatan->waktu)->format('H:i') }} WIB - Selesai
                                    </p>
                                    <p class="text-sm text-gray-600 mt-1 flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        {{ $kegiatan->lokasi ?? 'Aula Sekolah' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mt-8">Belum ada agenda kegiatan.</p>
    @endif
</div>