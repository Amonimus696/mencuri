<x-layout>
    <x-slot name="title">Berita & Pengumuman - SMKN 2 Yogyakarta</x-slot>

    <!-- BERITA HERO SECTION -->
    <section class="relative bg-slate-950 text-white pt-28 pb-16 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center">
            <span class="text-[#F59E0B] font-bold uppercase tracking-wider text-xs sm:text-sm">KABAR TERBARU SMKN 2 YK</span>
            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tighter leading-tight mt-2 mb-4">
                Berita & <span class="text-[#F59E0B]">Pengumuman</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                Informasi seputar kegiatan, prestasi siswa, agenda sekolah, dan pengumuman resmi SMKN 2 Yogyakarta.
            </p>
        </div>
    </section>

    <!-- BERITA LISTING GRID -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News 1 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
                    <div>
                        <div class="text-xs text-slate-400 font-bold mb-2">10 Juni 2025</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3 leading-snug">
                            Tim Adiwiyata SMKN 2 Yogya Gelar Aksi Bersih Sungai Peringati Hari Lingkungan Hidup
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed mb-6">
                            Sebagai sekolah berwawasan lingkungan, tim Adiwiyata SMKN 2 turun langsung membersihkan sungai dan lingkungan sekolah bersama ratusan siswa dan guru.
                        </p>
                    </div>
                    <a href="/berita/1" class="text-blue-600 font-bold text-xs hover:underline flex items-center gap-1">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>

                <!-- News 2 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
                    <div>
                        <div class="text-xs text-slate-400 font-bold mb-2">25 Mei 2025</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3 leading-snug">
                            SMKN 2 Yogyakarta Raih 4 Medali di Mitsubishi Technical Skill Contest 2025
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed mb-6">
                            Membuktikan kualitas standar industri, siswa jurusan TKRO berhasil mendominasi kompetisi otomotif nasional yang diadakan langsung oleh Mitsubishi Motors Indonesia.
                        </p>
                    </div>
                    <a href="/berita/2" class="text-blue-600 font-bold text-xs hover:underline flex items-center gap-1">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>

                <!-- News 3 -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
                    <div>
                        <div class="text-xs text-slate-400 font-bold mb-2">12 April 2025</div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3 leading-snug">
                            Siswa SMKN 2 Yogyakarta Raih Medali Emas FIKSI 2024 di Jakarta
                        </h3>
                        <p class="text-slate-600 text-xs leading-relaxed mb-6">
                            Karya inovasi teknologi dari tim SIJA sukses meraih medali emas di Festival Inovasi dan Kewirausahaan Siswa Indonesia tingkat nasional.
                        </p>
                    </div>
                    <a href="/berita/3" class="text-blue-600 font-bold text-xs hover:underline flex items-center gap-1">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
