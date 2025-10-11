<div>
    <section id="ekstrakulikuler" class="py-16 bg-white">
        {{-- Container di sini untuk membatasi lebar konten --}}
        <div class="container mx-auto px-4"> 
            {{-- Judul --}}
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Ekstrakulikuler</h2>
            <div class="w-12 h-1 bg-green-500 mx-auto mb-10"></div>

            {{-- Grid Ekstrakurikuler (Menampilkan 3 item) --}}
            @if ($ekskuls->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($ekskuls as $ekskul)
                        <div class="bg-white shadow-xl rounded-xl overflow-hidden group">
                            
                            {{-- Bagian Gambar (Jika ada) --}}
                            <div class="h-48 bg-green-600/10 flex items-center justify-center p-4">
                                @if ($ekskul->foto_eskul)
                                    {{-- Ganti 'storage' dengan disk yang sesuai jika perlu --}}
                                    <img src="{{ asset('storage/' . $ekskul->foto_eskul) }}" 
                                        alt="{{ $ekskul->nama_eskul }}" 
                                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                                @else
                                    {{-- Placeholder Icon (seperti di gambar Anda) --}}
                                    <svg class="w-20 h-20 text-green-700/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                @endif
                            </div>
                            
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-900 mb-2">{{ $ekskul->nama_eskul }}</h4>
                                <div class="text-sm text-gray-600 space-y-1">
                                    <p><strong>Pembimbing:</strong> {{ $ekskul->pembimbing }}</p>
                                    <p><strong>Jadwal:</strong> {{ $ekskul->hari }}, Pukul {{ date('H:i', strtotime($ekskul->waktu)) }}</p>
                                    <p><strong>Tempat:</strong> {{ $ekskul->tempat }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Tombol Tampilkan Semua --}}
                <div class="text-center mt-12">
                    <a href="{{ route('ekstrakulikuler.index') }}" 
                    class="inline-block bg-green-600 text-white px-10 py-3 rounded-full font-bold uppercase tracking-wider hover:bg-green-700 transition duration-300 shadow-lg">
                        Tampilkan Semua
                    </a>
                </div>
            @else
                <p class="text-center text-lg text-gray-500 py-10">Belum ada data ekstrakulikuler yang tersedia saat ini. 😔</p>
            @endif
        </div>
    </section>
</div>
