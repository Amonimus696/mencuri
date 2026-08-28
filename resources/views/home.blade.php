<x-layout>
    <x-slot name="title">SMK Negeri 2 Yogyakarta | The Industrial Culture School</x-slot>

    <!-- HERO SECTION -->
    <section class="relative min-h-[92vh] flex items-center justify-center overflow-hidden bg-slate-950 pt-28 pb-20">
        <!-- YouTube Background Video Embed -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <iframe 
                class="absolute top-1/2 left-1/2 w-[300vw] h-[300vh] min-w-[177.77vw] min-h-[56.25vw] -translate-x-1/2 -translate-y-1/2 opacity-40 scale-125 pointer-events-none"
                src="https://www.youtube.com/embed/R1NA1pnGVfw?autoplay=1&mute=1&loop=1&playlist=R1NA1pnGVfw&controls=0&showinfo=0&rel=0&iv_load_policy=3&enablejsapi=1&playsinline=1&disablekb=1" 
                title="SMKN 2 Yogyakarta Video Background"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/75 to-slate-950/50"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-transparent to-transparent"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center md:text-left">
            <div class="max-w-4xl">
                <!-- Top Notification Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#F59E0B] font-bold text-xs sm:text-sm mb-6 uppercase tracking-wider">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#F59E0B] animate-ping"></span>
                    Penerimaan Peserta Didik Baru 2026/2027 Segera Dibuka!
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white tracking-tighter leading-[1.1] mb-8">
                    The <span class="text-[#F59E0B]">Industrial Culture</span> School
                </h1>
                
                <!-- Tagline Subtitle -->
                <p class="text-base sm:text-xl text-slate-300 font-medium mb-10 max-w-3xl leading-relaxed">
                    Eks. Princess Juliana School (PJS) — Membentuk lulusan vokasi yang kompeten, berkarakter kuat, dan siap bersaing di era industri global.
                </p>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                    <a href="/ppdb" class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#F59E0B] text-slate-950 font-black rounded-full transition-all hover:scale-105 hover:bg-amber-400 shadow-lg shadow-amber-500/20">
                        <span class="relative z-10 flex items-center gap-2">
                            Daftar Sekarang
                            <svg class="group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </span>
                    </a>
                    <a href="/tentang" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-full hover:bg-white/20 transition-all">
                        <svg class="w-5 h-5 text-[#F59E0B] fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        Lihat Profil Video
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTICS & CENTER OF EXCELLENCE SECTION -->
    <section class="py-16 bg-slate-900 text-white border-y border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
                <!-- Card 1 -->
                <div class="p-8 bg-slate-800/90 rounded-3xl border border-slate-700/80 shadow-lg space-y-4">
                    <div class="inline-block px-3.5 py-1 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold text-xs uppercase tracking-wider">
                        Pusat Keunggulan
                    </div>
                    <h3 class="text-2xl font-black text-white">Sekolah Pusat Keunggulan (Center of Excellence)</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Terpilih sebagai SMK Pusat Keunggulan oleh Kemdikbudristek, dengan kurikulum terstandarisasi industri global dan fasilitas pembelajaran berbasis Teaching Factory (TeFa).
                    </p>
                    <a href="/tentang" class="inline-flex items-center gap-1.5 text-[#F59E0B] font-bold text-sm hover:underline">
                        Pelajari lebih lanjut &rarr;
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="p-8 bg-slate-800/90 rounded-3xl border border-slate-700/80 shadow-lg space-y-4">
                    <div class="inline-block px-3.5 py-1 rounded-full bg-blue-500/20 text-blue-400 font-bold text-xs uppercase tracking-wider">
                        Standar Industri
                    </div>
                    <h3 class="text-2xl font-black text-white">Fasilitas Modern</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Laboratorium & Bengkel Standar Industri 4.0 yang menjamin kualitas pembelajaran praktik presisi tinggi dan kesiapan kerja seluruh siswa.
                    </p>
                    <a href="/tentang" class="inline-flex items-center gap-1.5 text-blue-400 font-bold text-sm hover:underline">
                        Pelajari lebih lanjut &rarr;
                    </a>
                </div>
            </div>

            <!-- Metric Counters -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center border-t border-slate-800 pt-10">
                <div>
                    <div class="text-4xl font-black text-[#F59E0B] mb-1">2.5K+</div>
                    <div class="text-sm font-bold text-slate-300">Siswa Aktif Berprestasi</div>
                </div>
                <div>
                    <div class="text-4xl font-black text-[#F59E0B] mb-1">9</div>
                    <div class="text-sm font-bold text-slate-300">Jurusan Terakreditasi A</div>
                </div>
                <div>
                    <div class="text-4xl font-black text-[#F59E0B] mb-1">150+</div>
                    <div class="text-sm font-bold text-slate-300">Mitra DUDI Terkemuka</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9 PROGRAM KEAHLIAN (JURUSAN) SECTION -->
    <section id="jurusan" class="py-20 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#F59E0B] font-bold uppercase tracking-wider text-xs sm:text-sm">PROGRAM KEAHLIAN VOKASI</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-2">9 Program Keahlian Unggulan</h2>
                <p class="text-slate-600 text-base mt-3 leading-relaxed">
                    Kurikulum berbasis Teaching Factory (TEFA), fasilitas standar industri, dan kemitraan langsung dengan DUDI nasional & internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- 1. SIJA -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                💻
                            </span>
                            <span class="px-3.5 py-1 bg-blue-50 text-blue-700 text-xs font-black rounded-full border border-blue-200">
                                4 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">
                            Sistem Informatika, Jaringan dan Aplikasi
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Program unggulan 4 tahun berstandar internasional. Menguasai cloud computing, keamanan siber, IoT, dan administrasi server. Lulusan langsung bersertifikasi Mikrotik Academy dan siap berkarir sebagai Network Engineer.
                        </p>
                    </div>
                    <a href="/jurusan/1" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 2. TKRO -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-red-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                🚗
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-red-600 transition-colors">
                            Teknik Kendaraan Ringan Otomotif
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Jurusan otomotif terlengkap dengan dukungan penuh dari Mitsubishi Motors. Belajar langsung dengan unit kendaraan asli (Outlander Sport) dari CSR KTB. Kurikulum CBT & PBE standar industri global.
                        </p>
                    </div>
                    <a href="/jurusan/2" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 3. DKV / MM -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-purple-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                🎨
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition-colors">
                            Desain Komunikasi Visual / Multimedia
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Pusat kreativitas digital SMKN 2 Yogyakarta. Menguasai fotografi, videografi, animasi 2D/3D, desain grafis, dan UI/UX. Dilengkapi studio produksi profesional dan software industri terkini.
                        </p>
                    </div>
                    <a href="/jurusan/3" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 4. TITL -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                ⚡
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">
                            Teknik Instalasi Tenaga Listrik
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Ahli kelistrikan industri dan rumah tangga. Menguasai instalasi panel listrik, sistem kendali PLC, dan otomasi industri. Peluang karir terbuka lebar di BUMN kelistrikan dan perusahaan manufaktur.
                        </p>
                    </div>
                    <a href="/jurusan/4" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 5. TP -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-slate-800 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                ⚙️
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-slate-800 transition-colors">
                            Teknik Pemesinan
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Jurusan legendaris sejak era STM 1. Menguasai mesin bubut, frais, gerinda, dan CNC (Computer Numerical Control). Lulusan menjadi teknisi presisi tinggi yang dibutuhkan industri manufaktur pesawat, otomotif, dan permesinan.
                        </p>
                    </div>
                    <a href="/jurusan/5" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 6. DPIB -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                📐
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-emerald-600 transition-colors">
                            Desain Pemodelan dan Informasi Bangunan
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Arsitektur dan teknik sipil era digital. Merancang gedung bertingkat menggunakan AutoCAD, SketchUp, dan BIM (Building Information Modeling). Menjadi drafter dan desainer bangunan profesional yang dibutuhkan kontraktor nasional.
                        </p>
                    </div>
                    <a href="/jurusan/6" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 7. KGSP -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-orange-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                🏗️
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-orange-600 transition-colors">
                            Konstruksi Gedung, Sanitasi dan Perawatan
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Ahli konstruksi bangunan dan utilitas gedung. Menguasai teknik konstruksi batu beton, pemasangan sanitasi, dan perawatan gedung bertingkat. Lulusan siap bekerja di proyek-proyek infrastruktur besar.
                        </p>
                    </div>
                    <a href="/jurusan/7" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 8. TAV -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                📻
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">
                            Teknik Audio Video
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Spesialis elektronika dan penyiaran. Menguasai sistem tata suara profesional, instalasi perangkat audio visual, perawatan peralatan broadcasting, dan teknologi elektronika terapan.
                        </p>
                    </div>
                    <a href="/jurusan/8" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

                <!-- 9. Geomatika -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span class="w-14 h-14 rounded-2xl bg-teal-600 text-white flex items-center justify-center text-2xl font-bold shadow-md group-hover:bg-[#F59E0B] group-hover:text-slate-950 transition-all">
                                🗺️
                            </span>
                            <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-black rounded-full">
                                3 Tahun
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-teal-600 transition-colors">
                            Teknik Geomatika / Survey Pemetaan
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Menjadi surveyor profesional dan ahli pemetaan modern. Menguasai teknologi GPS, pemetaan drone, pengolahan data spasial dengan GIS, dan levelling presisi untuk proyek infrastruktur berskala besar.
                        </p>
                    </div>
                    <a href="/jurusan/9" class="w-full text-center py-3 bg-slate-100 hover:bg-[#F59E0B] hover:text-slate-950 font-bold rounded-2xl text-sm transition-colors text-slate-700">
                        Lihat Detail
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- INDUSTRY PARTNERS SECTION -->
    <section class="py-16 bg-white border-t border-slate-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center">
            <h3 class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-8">
                Dipercaya & Bermitra dengan Industri Terkemuka
            </h3>
            <div class="flex flex-wrap items-center justify-center gap-8 md:gap-12 opacity-60 grayscale hover:grayscale-0 transition-all">
                <span class="text-xl font-black text-slate-700 tracking-tight">TELKOM INDONESIA</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">MITSUBISHI MOTORS</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">PANASONIC</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">SAMSUNG</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">UNITED TRACTORS</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">PLN PERSERO</span>
                <span class="text-xl font-black text-slate-700 tracking-tight">EPSON</span>
            </div>
        </div>
    </section>

    <!-- NEWS SECTION -->
    <section class="py-20 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
                <div>
                    <span class="text-[#F59E0B] font-bold uppercase tracking-wider text-xs sm:text-sm">KABAR TERBARU SMKN 2 YK</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-1">Berita & Pengumuman Terbaru</h2>
                </div>
                <a href="/berita" class="mt-4 sm:mt-0 text-slate-900 font-bold hover:text-[#F59E0B] flex items-center gap-1 text-sm">
                    Lihat Semua Berita &rarr;
                </a>
            </div>

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
