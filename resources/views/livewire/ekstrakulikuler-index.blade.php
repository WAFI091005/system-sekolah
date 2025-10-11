<div class="container mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Daftar Ekstrakurikuler</h2>
    <div class="w-12 h-1 bg-green-500 mx-auto mb-10"></div>

    @if ($ekskuls->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($ekskuls as $ekskul)
                <div class="relative bg-transparent flex flex-col items-center">

                    {{-- FOTO KEGIATAN --}}
                    <div class="w-full h-64 bg-gray-200 rounded-xl overflow-hidden shadow-md">
                        @if ($ekskul->foto_eskul)
                            <img src="{{ asset('storage/' . $ekskul->foto_eskul) }}" 
                                 alt="{{ $ekskul->nama_eskul }}" 
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-600">
                                Foto kegiatan
                            </div>
                        @endif
                    </div>

                    {{-- KETERANGAN KEGIATAN (menumpuk di bawah foto) --}}
                    <div class="relative -mt-20 w-[90%] bg-white rounded-xl shadow-lg p-5 text-center">
                        <p class="font-bold text-lg text-gray-800 mb-3">
                            {{ $ekskul->nama_eskul ?? 'Keterangan Kegiatan' }}
                        </p>
                        <div class="text-sm text-gray-600 space-y-1">
                            <p><strong>Pembimbing:</strong> {{ $ekskul->pembimbing }}</p>
                            <p><strong>Jadwal:</strong> {{ $ekskul->hari }}, Pukul {{ date('H:i', strtotime($ekskul->waktu)) }}</p>
                            <p><strong>Tempat:</strong> {{ $ekskul->tempat }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-lg text-gray-500 py-10">
            Belum ada data ekstrakulikuler yang tersedia saat ini. 😔
        </p>
    @endif
</div>
