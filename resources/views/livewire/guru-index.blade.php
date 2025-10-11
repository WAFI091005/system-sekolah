<div class="container mx-auto py-10 px-6">

    @php

        // Jika data guru kosong, pakai data hardcode
        $dataToDisplay = $gurus->isNotEmpty()
            ? $gurus->where('is_kepsek', 0)->map(function ($g) {
                return (object)[
                    'nama' => $g->nama,
                    'mapel' => $g->mapel,
                    'status' => $g->is_kepsek ? 'staf' : 'guru',
                ];
            })->filter(fn($item) => $item->status === ($activeTab ?? 'guru'))
            : $hardcodeData->where('status', $activeTab ?? 'guru');
    @endphp

    {{-- 1. Tab Navigasi --}}
    <div class="flex justify-center space-x-8 mb-12 border-b border-gray-300">
        <button 
            wire:click="changeTab('guru')" 
            class="text-xl font-bold px-4 py-2 transition duration-200 
                   {{ ($activeTab ?? 'guru') == 'guru' ? 'text-green-700 border-b-4 border-green-700' : 'text-gray-500 hover:text-green-700' }}"
        >
            Guru
        </button>
        <button 
            wire:click="changeTab('staf')" 
            class="text-xl font-bold px-4 py-2 transition duration-200 
                   {{ ($activeTab ?? 'guru') == 'staf' ? 'text-green-700 border-b-4 border-green-700' : 'text-gray-500 hover:text-green-700' }}"
        >
            Staf
        </button>
    </div>

    {{-- 2. Area Foto Bersama --}}
    <div class="bg-gray-200 rounded-xl shadow-lg mb-12 p-16 h-72 flex items-center justify-center">
        <p class="text-2xl font-medium text-gray-700">
            Foto bersama para {{ ($activeTab ?? 'guru') == 'guru' ? 'Guru' : 'Staf' }}
        </p>
    </div>

    {{-- 3. Daftar Card Guru/Staf --}}
    <h3 class="text-2xl font-bold text-center mb-10 text-gray-800">
        Daftar {{ ($activeTab ?? 'guru') == 'guru' ? 'Guru' : 'Staf' }}
    </h3>

    @if($dataToDisplay->isNotEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($dataToDisplay as $guru)
                <div class="rounded-xl overflow-hidden shadow-2xl border-2 border-gray-300 hover:shadow-xl transition duration-300">
                    {{-- Blok Atas (Hijau) --}}
                    <div class="bg-green-700 h-48 flex flex-col items-center justify-center p-4">
                        <svg class="w-20 h-20 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>

                    {{-- Blok Bawah --}}
                    <div class="bg-gray-100 p-4 text-center">
                        <p class="font-bold text-lg text-gray-800">{{ $guru->nama }}</p>
                        <p class="text-sm text-gray-600">{{ $guru->mapel }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mt-6">
            Tidak ada data {{ ($activeTab ?? 'guru') }} yang ditemukan.
        </p>
    @endif
</div>
