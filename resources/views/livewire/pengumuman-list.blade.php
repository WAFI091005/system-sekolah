<div class="bg-white rounded-lg p-6 shadow-xl h-full border-t-8 border-green-600">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-gray-800">Pengumuman</h3>
        <a href="{{ route('pengumuman.index') }}" class="text-green-600 text-sm hover:underline">
            Lihat semua pengumuman &raquo;
        </a>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
        {{-- Loop Pengumuman --}}
        @forelse($pengumuman->take(2) as $item)
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                @if($item->foto_pengumuman)
                    {{-- Gambar Pengumuman --}}
                    <img src="{{ asset('storage/'.$item->foto_pengumuman) }}" alt="{{ $item->judul }}" class="w-full h-32 object-cover">
                @else
                    {{-- Placeholder untuk Pengumuman tanpa gambar (seperti gambar desain) --}}
                    <div class="w-full h-32 bg-gray-200 flex items-center justify-center p-3">
                        <p class="text-xs text-gray-600 text-center line-clamp-4">{{ $item->isi }}</p>
                    </div>
                @endif
                
                {{-- Judul Pengumuman --}}
                <div class="p-3">
                    <h4 class="text-sm font-semibold text-gray-800 line-clamp-2 hover:text-green-600">{{ $item->judul }}</h4>
                    <p class="text-xs text-gray-400 mt-1">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-sm col-span-2">Belum ada pengumuman terbaru.</p>
        @endforelse

        {{-- Contoh data statis sesuai desain (jika data kosong) --}}
        @if(empty($pengumuman) || count($pengumuman) === 0)
            {{-- Pengumuman 1 (tanpa gambar) --}}
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="w-full h-32 bg-gray-200 flex items-center justify-center p-3">
                    <p class="text-xs text-gray-600 text-center line-clamp-4">Pemberitahuan Pengumpulan Raport SMK Cendikia Perkasa TA 2025 Kelas 1, 2, 3 wajib hadir...</p>
                </div>
                <div class="p-3">
                    <h4 class="text-sm font-semibold text-gray-800 line-clamp-2">Pemberitahuan Pengumpulan Raport SMK Cendikia Perkasa TA 2025...</h4>
                    <p class="text-xs text-gray-400 mt-1">10 Jun 2025</p>
                </div>
            </div>

            {{-- Pengumuman 2 (dengan gambar) --}}
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="https://via.placeholder.com/200x128/90EE90/000000?text=Foto+Pengumuman" alt="Rapat Guru" class="w-full h-32 object-cover">
                <div class="p-3">
                    <h4 class="text-sm font-semibold text-gray-800 line-clamp-2">Pemberitahuan Kepada Seluruh Guru dan Staff untuk mengikuti rapat...</h4>
                    <p class="text-xs text-gray-400 mt-1">5 Jun 2025</p>
                </div>
            </div>
        @endif
    </div>
</div>