<div>
    {{-- FOOTER UTAMA --}}
    <footer class="bg-[#2e2e2e] text-white pt-10 pb-8">
        {{-- Hapus px-8 dari sini, kita akan terapkan padding di dalam kolom --}}
        <div class="max-w-7xl mx-auto"> 
            
            {{-- Grid proporsional (2fr_1fr_1fr) --}}
            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr_1fr] gap-x-8 items-start">

                {{-- KIRI: Logo + Info Sekolah (Ditambahkan pl-8 untuk padding kiri) --}}
                <div class="pl-4 flex items-start space-x-4"> 
                    <img src="{{ asset('images/logo.png') }}" 
                        alt="Logo Sekolah" 
                        class="h-20 w-20 object-contain flex-shrink-0 mt-1">
                    <div>
                        <h3 class="text-xl font-bold uppercase leading-tight">
                            {{ $profil->nama_sekolah ?? 'SMK CENDIKIA PERKASAAA' }}
                            <span class="block text-base font-semibold text-gray-300">
                                {{ $profil->kabupaten ?? 'PURBALINGGA' }}
                            </span>
                        </h3>

                        <p class="text-sm leading-relaxed text-gray-300 mt-2">
                            {{ $profil->alamat ?? 'Jalan Wali Perkasa Kav 1, Pekiringan, Karangmoncol, Purbalingga' }}
                        </p>

                        <div class="text-sm space-y-1 pt-1 text-gray-300">
                            <p>email : {{ $profil->email ?? 'cendikiaperkasa@gmail.com' }}</p>
                            <p>no telp : {{ $profil->no_hp ?? '+62 999696' }}</p>
                        </div>
                    </div>
                </div>

                {{-- TENGAH: Menu Lainnya --}}
                <div class="pl-4 pr-4"> {{-- Tambahkan padding minimal agar tidak menempel ke kolom kiri --}}
                    <h4 class="text-base font-bold mb-4">Menu Lainnya</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="/ppdb" class="hover:text-green-400 transition">PPDB</a></li>
                        <li><a href="/ekstrakulikuler" class="hover:text-green-400 transition">Ekstrakulikuler</a></li>
                        <li><a href="/pengumuman" class="hover:text-green-400 transition">Pengumuman</a></li>
                        <li><a href="/postingan" class="hover:text-green-400 transition">Berita & Artikel</a></li>
                    </ul>
                </div>

                {{-- KANAN: Temukan Kami (Ditambahkan pr-8 untuk padding kanan dan justify-self-end) --}}
                <div class="pr-8 justify-self-start md:justify-self-end"> 
                    <h4 class="text-base font-bold mb-4">Temukan Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-blue-400 transition"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-white hover:text-red-500 transition"><i class="fab fa-youtube text-xl"></i></a>
                        <a href="#" class="text-white hover:text-pink-500 transition"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-white hover:text-blue-300 transition"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-white hover:text-gray-300 transition"><i class="fab fa-tiktok text-xl"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    {{-- FOOTER BAWAH --}}
    <div class="bg-black text-gray-400 text-center py-3 text-sm font-medium">
        Hak Cipta &copy; {{ date('Y') }} | Semua Hak Dilindungi
    </div>
</div>