<div class="bg-white shadow-xl rounded-lg p-6 grid lg:grid-cols-2 gap-8 items-start">
    
    {{-- Kolom Gambar Kepala Sekolah --}}
    <div class="lg:col-span-1 border border-green-600 rounded-lg p-2 bg-gray-50 flex flex-col items-center">
        @if ($kepsek)
            <div class="bg-green-700 text-white text-center w-full py-1 rounded-t-md">
                <h3 class="font-semibold text-sm">{{ $kepsek->nama }}</h3>
            </div>
            <img src="{{ asset($kepsek->foto) }}" class="w-56 h-auto object-cover mt-2 rounded-lg" alt="Kepala Sekolah">

            <a href="{{ route('guru.show', $kepsek->id) }}" 
               class="text-green-700 text-sm font-medium mt-3 border border-green-700 px-4 py-1 rounded-full hover:bg-green-700 hover:text-white transition duration-300">
                LIHAT PROFIL
            </a>
        @else
            <div class="bg-red-500 text-white text-center w-full py-1 rounded-t-md">
                <h3 class="font-semibold text-sm">DATA KEPALA SEKOLAH BELUM DIATUR</h3>
            </div>
            <div class="w-56 h-56 bg-gray-200 mt-2 rounded-lg flex items-center justify-center text-gray-500">Foto Tidak Ada</div>
        @endif
    </div>

    {{-- Kolom Teks Sambutan dan Deskripsi Sekolah --}}
    <div>
        {{-- Nama & Deskripsi Sekolah --}}
        <h2 class="text-3xl font-bold mb-4 text-gray-800" id="profile">
            SELAMAT DATANG DI {{ $profil->nama_sekolah ?? 'Sekolah Kami' }}
        </h2>

        @if ($profil && $profil->deskripsi)
            <p class="text-gray-700 leading-relaxed text-sm mb-4 whitespace-pre-line">
                {{ $profil->deskripsi }}
            </p>
        @else
            <p class="text-gray-500 italic text-sm mb-4">
                Deskripsi sekolah belum dimasukkan ke database.
            </p>
        @endif

        {{-- Sambutan Kepala Sekolah --}}
        <h3 class="text-xl font-semibold mt-6 mb-2 text-green-700">Sambutan Kepala Sekolah</h3>

        @if ($sambutan && $sambutan->excerpt)
            <p class="text-gray-600 leading-normal text-sm">
                {{ $sambutan->excerpt }}
                <a href="{{ route('sambutan.full') }}" class="text-green-600 hover:text-green-800 text-xs font-semibold">read more &raquo;</a>
            </p>
        @else
            <p class="text-gray-600 leading-normal text-sm text-red-500">
                Teks sambutan belum dimasukkan ke database.
            </p>
        @endif
    </div>

</div>
