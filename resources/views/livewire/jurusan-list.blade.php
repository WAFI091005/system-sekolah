<div id="jurusan">
    {{-- SECTION: Background full hijau --}}
    <section class="bg-green-700 text-gray-900 py-16 text-center">
        <div class="container mx-auto">
            
            <h2 class="text-3xl font-extrabold text-white mb-10">Program Keahlian</h2>

            {{-- Card utama putih (Wrapper) --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 max-w-5xl mx-auto flex flex-col md:flex-row justify-center items-start divide-y md:divide-y-0 md:divide-x divide-gray-300">
                @foreach ($jurusanList as $jurusan)
                    
                    {{-- Container Kolom Jurusan --}}
                    {{-- Tambahkan min-h-96 atau min-h-80 untuk menjaga kolom tetap panjang --}}
                    <div class="flex-1 relative px-10 py-6 min-h-96"> 
                        
                        {{-- 1. Nama Jurusan (mb-6 untuk jarak yang pas) --}}
                        <h3 class="font-bold text-xl mb-12">{{ $jurusan->nama }}</h3> 
                        
                        {{-- 2. Card Hijau: Diberi H-48 (12rem) untuk tinggi tetap. --}}
                        <div class="bg-[#01A85A] text-white rounded-xl p-6 pt-12 px-10 w-full shadow-lg mt-[-0px] h-60 flex items-center justify-center"> 
                            <p class="text-base leading-relaxed">
                                {{-- Gunakan line-clamp jika teks terlalu panjang dan tidak mau meluber --}}
                                <span class="line-clamp-6">{{ $jurusan->deskripsi }}</span> 
                            </p>
                        </div>

                        {{-- 3. Lingkaran Icon (ABSOLUTE) --}}
                        {{-- Posisinya disetel ulang agar pas di batas card hijau yang baru --}}
                        <div class="absolute top-[100px] left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-full p-5 shadow-lg">
                            {!! $jurusan->icon !!}
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- TOMBOL LIHAT SEMUA KEAHILAN --}}
            <div class="mt-8">
                <a href="{{ route('jurusan.index') }}" 
                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-green-700 bg-white hover:bg-gray-100 transition duration-150 ease-in-out">
                    Lihat Semua Keahlian
                    <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            {{-- AKHIR TOMBOL --}}

        </div>
    </section>
</div>