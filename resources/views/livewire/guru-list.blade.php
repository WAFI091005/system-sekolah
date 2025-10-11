<div>
    {{-- Hardcode data untuk fallback (jika belum ada data dari database) --}}
    @php
        $hardcodeGurus = collect([
            (object)['nama' => 'Nabil Iskandar', 'mapel' => 'Matematika', 'foto' => '/images/guru1.jpg'],
            (object)['nama' => 'Sri Wahyuni', 'mapel' => 'Guru Bahasa Inggris', 'foto' => 'https://via.placeholder.com/150x200/52b788/ffffff?text=GURU+2'],
            (object)['nama' => 'Rizki Adi', 'mapel' => 'Guru TKJ', 'foto' => 'https://via.placeholder.com/150x200/52b788/ffffff?text=GURU+3'],
            (object)['nama' => 'Dewi Puspita', 'mapel' => 'Guru TBSM', 'foto' => 'https://via.placeholder.com/150x200/52b788/ffffff?text=GURU+4'],
        ]);
        
        // Gunakan data dari Livewire Controller ($gurus) jika ada, jika tidak, gunakan hardcode.
        // Catatan: Jika Anda tidak mendefinisikan $gurus di Livewire Controller, ini akan error.
        // Untuk amannya, kita akan menguji keberadaan $gurus.
        $displayGurus = isset($gurus) && $gurus->count() > 0 ? $gurus : $hardcodeGurus;
    @endphp

    @if($displayGurus->count() > 0)
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($displayGurus as $guru)
                <div class="bg-white rounded-lg shadow-xl overflow-hidden p-3 border-b-8 border-green-700">
                    <div class="flex flex-col items-center">
                        {{-- Foto Guru --}}
                        <img 
                            src="{{ asset($guru->foto ?? 'https://via.placeholder.com/150x200/52b788/ffffff?text=GURU') }}" 
                            alt="{{ $guru->nama }}" 
                            class="w-32 h-32 object-cover rounded-full shadow-lg border-4 border-white -mt-10"
                        >
                        <div class="p-3 text-center w-full">
                            <h3 class="font-bold text-md truncate mt-2">{{ $guru->nama }}</h3>
                            {{-- Menggunakan properti 'mapel' yang baru disamakan dengan hardcode --}}
                            <p class="text-sm text-gray-500">{{ $guru->mapel }}</p> 
                        </div>
                        <div class="h-20 bg-green-100 w-full rounded-b-lg"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('guru.index') }}" class="px-6 py-2 border-2 border-green-700 text-green-700 font-semibold rounded-full hover:bg-green-700 hover:text-white transition duration-300">
                Lihat Semua Guru &raquo;
            </a>
        </div>
    @else
        <p class="text-gray-500">Belum ada data guru yang ditambahkan.</p>
    @endif
</div>