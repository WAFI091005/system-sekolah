<div class="bg-white rounded-lg p-6 shadow-xl h-full border-t-8 border-green-600">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-gray-800">Agenda</h3>
        <a href="{{ route('kegiatan.index') }}" class="text-green-600 text-sm hover:underline">
            Lihat semua agenda &raquo;
        </a>
    </div>

    {{-- Kotak Agenda Kegiatan (Sesuai Desain) --}}
    <div class="space-y-4">
        @forelse($kegiatans as $kegiatan)
            <div class="bg-gray-50 rounded-lg p-4 flex items-center shadow-md hover:shadow-lg transition duration-300">
                {{-- Tanggal Besar di Kiri --}}
                <div class="flex-shrink-0 text-center w-20 h-20 bg-green-700 text-white rounded-lg flex flex-col items-center justify-center mr-4">
                    <span class="text-xs font-semibold uppercase">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('D, d M') }}</span>
                    <span class="text-2xl font-extrabold">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('j') }}</span>
                </div>
                
                {{-- Detail Kegiatan --}}
                <div>
                    <h4 class="text-base font-bold text-gray-800">{{ $kegiatan->judul }}</h4>
                    <p class="text-sm text-gray-600 mt-1 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        {{ \Carbon\Carbon::parse($kegiatan->waktu)->format('H:i') }} - Selesai
                    </p>
                    <p class="text-sm text-gray-600 mt-1 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $kegiatan->lokasi ?? 'Aula Sekolah' }}
                    </p>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-sm">Belum ada agenda kegiatan terbaru.</p>
        @endforelse
    </div>

    {{-- Contoh data statis sesuai desain (jika data kosong) --}}
    @if(empty($kegiatans) || count($kegiatans) === 0)
    <div class="space-y-4">
        {{-- Agenda 1 --}}
        <div class="bg-gray-50 rounded-lg p-4 flex items-center shadow-md hover:shadow-lg transition duration-300">
            <div class="flex-shrink-0 text-center w-20 h-20 bg-green-700 text-white rounded-lg flex flex-col items-center justify-center mr-4">
                <span class="text-xs font-semibold uppercase">Kamis</span>
                <span class="text-2xl font-extrabold">7</span>
                <span class="text-xs font-semibold uppercase -mt-1">Juni 2025</span>
            </div>
            <div>
                <h4 class="text-base font-bold text-gray-800">Pemilihan Ketua OSIS</h4>
                <p class="text-sm text-gray-600 mt-1 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    08:30 - Selesai
                </p>
                <p class="text-sm text-gray-600 mt-1 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Aula Sekolah
                </p>
            </div>
        </div>
    </div>
    @endif
</div>