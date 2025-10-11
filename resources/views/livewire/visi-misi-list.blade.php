<div id="visimisi">
    @php
        // Hardcode Fallback Data
        $hardcodeVisi = 'Menjadi SMK unggulan yang mencetak insan beriman, berakhlakul karimah, cerdas, dan kompeten dalam menghadapi tantangan dunia kerja dan industri.';
        $hardcodeMisi = 'Mampu menjadi tenaga kerja tingkat menengah yang dapat bersaing dalam mengisi kebutuhan dunia usaha dan industri pada saat ini maupun masa yang akan datang.';
        
        $displayVisi = (isset($visi) && !empty($visi)) ? $visi : $hardcodeVisi;
        $displayMisi = (isset($misi) && !empty($misi)) ? $misi : $hardcodeMisi;
    @endphp

    {{-- SECTION: Background full hijau --}}
    <section class="bg-green-700 text-white py-1 text-center"> {{-- Menggunakan py-16 yang konsisten --}}
        <div class="container mx-auto px-4">
            
            {{-- Judul --}}
            <h2 class="text-3xl font-extrabold mb-8">Visi & Misi</h2>
            
            {{-- Container Putih Utama (Card Visi Misi) --}}
            <div class="bg-white text-gray-800 rounded-xl p-8 shadow-2xl border-4 border-green-600 max-w-5xl mx-auto">
                
                {{-- Grid/Flex untuk Visi dan Misi dengan Garis Pemisah --}}
                <div class="flex flex-col md:flex-row divide-x divide-gray-300 items-start text-left">
                    
                    {{-- Kolom Visi --}}
                    <div class="flex-1 p-4 md:px-8 md:py-4">
                        <h3 class="text-xl font-bold mb-3 text-center">Visi</h3>
                        <p class="text-base leading-relaxed text-gray-800 text-center">
                            {{ $displayVisi }}
                        </p>
                    </div>
                    
                    {{-- Kolom Misi --}}
                    <div class="flex-1 p-4 md:px-8 md:py-4">
                        <h3 class="text-xl font-bold mb-3 text-center">Misi</h3>
                        <p class="text-base leading-relaxed text-gray-800 text-center">
                            {{ $displayMisi }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>