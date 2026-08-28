<x-layout>
    <x-slot name="title">Profil Sekolah - SMKN 2 Yogyakarta</x-slot>

    <!-- PROFIL HERO SECTION -->
    <section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden bg-slate-950 pt-28 pb-20">
        <!-- YouTube Background Video -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <iframe 
                class="absolute top-1/2 left-1/2 w-[300vw] h-[300vh] min-w-[177.77vw] min-h-[56.25vw] -translate-x-1/2 -translate-y-1/2 opacity-40 scale-125 pointer-events-none"
                src="https://www.youtube.com/embed/R1NA1pnGVfw?autoplay=1&mute=1&loop=1&playlist=R1NA1pnGVfw&controls=0&showinfo=0&rel=0&iv_load_policy=3&enablejsapi=1&playsinline=1&disablekb=1" 
                title="SMKN 2 Yogyakarta Profile Video Background"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/75 to-slate-950/50"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-transparent to-transparent"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#F59E0B] font-bold text-xs sm:text-sm mb-6 uppercase tracking-wider">
                🏛️ Gedung Cagar Budaya Nasional — Didirikan 1919
            </div>
            
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white tracking-tighter leading-tight mb-6">
                Profil <span class="text-[#F59E0B]">Sekolah</span>
            </h1>
            
            <p class="text-base sm:text-xl text-slate-300 max-w-3xl mx-auto font-medium leading-relaxed mb-8">
                Eks. Princess Juliana School (PJS) / STM 1 Yogyakarta — Sekolah teknik tertua dan paling bersejarah di Yogyakarta yang mencetak SDM Vokasi Bertaraf Internasional.
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="#visi-misi" class="px-8 py-3.5 bg-[#F59E0B] text-slate-950 font-black rounded-full hover:bg-amber-400 transition-all shadow-lg shadow-amber-500/20">
                    Lihat Visi & Misi
                </a>
                <a href="#sejarah" class="px-8 py-3.5 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-full hover:bg-white/20 transition-all">
                    Perjalanan Sejarah
                </a>
            </div>
        </div>
    </section>

    <!-- 6 FACT SHEET CARDS SECTION -->
    <section class="py-16 bg-slate-900 border-y border-slate-800 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Fact 1 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Nama Resmi</div>
                    <div class="text-xl font-black text-white">SMK Negeri 2 Yogyakarta</div>
                </div>
                <!-- Fact 2 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Nama Sejarah</div>
                    <div class="text-xl font-black text-white">STM 1 / Princess Juliana School</div>
                </div>
                <!-- Fact 3 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Tahun Berdiri</div>
                    <div class="text-xl font-black text-white">1919 (105+ Tahun)</div>
                </div>
                <!-- Fact 4 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Akreditasi</div>
                    <div class="text-xl font-black text-white">A (Sangat Baik)</div>
                </div>
                <!-- Fact 5 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Sertifikasi Manajemen</div>
                    <div class="text-xl font-black text-white">ISO 9001:2008 TÜV Rheinland</div>
                </div>
                <!-- Fact 6 -->
                <div class="p-6 bg-slate-800/80 rounded-3xl border border-slate-700">
                    <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Luas Area Kampus</div>
                    <div class="text-xl font-black text-white">5,5 Hektar Kompleks Jetis</div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISI & MISI SECTION -->
    <section id="visi-misi" class="py-20 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#F59E0B] font-bold uppercase tracking-wider text-xs sm:text-sm">LANDASAN UTAMA</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-1">Fondasi <span class="text-[#F59E0B]">Pendidikan Kami</span></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- VISI CARD -->
                <div class="lg:col-span-5 bg-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-xl flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 opacity-10 text-white">
                        <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <div>
                        <div class="inline-block px-4 py-1.5 rounded-full bg-[#F59E0B] text-slate-950 font-bold text-xs uppercase mb-6">
                            Visi Unggulan
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black mb-6 leading-snug text-white">
                            "Menghasilkan Tamatan Yang Berkarakter, Unggul, Berwawasan Lingkungan, dan Berdaya Saing Global."
                        </h3>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Visi ini menjiwai setiap langkah pengembangan sarana prasarana, kurikulum merdeka vokasi, dan pola pembinaan siswa SMKN 2 Yogyakarta.
                    </p>
                </div>

                <!-- MISI CARD -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="inline-block px-4 py-1.5 rounded-full bg-slate-900 text-white font-bold text-xs uppercase mb-6">
                            10 Misi Strategis
                        </div>
                        <ol class="space-y-3.5 text-slate-700 text-sm">
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">1</span>
                                <span>Mengembangkan kurikulum pembelajaran berbasis Teaching Factory (TEFA).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">2</span>
                                <span>Mengembangkan budaya literasi numerik, digital, finansial, sains, dan bahasa.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">3</span>
                                <span>Mengembangkan kompetensi peserta didik sesuai dengan bakat dan minat.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">4</span>
                                <span>Menyelenggarakan pembelajaran dan manajemen sekolah berbasis TIK.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">5</span>
                                <span>Meningkatkan fasilitas dan lingkungan belajar yang aman, nyaman, ramah lingkungan, ramah anak dan responsif gender.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">6</span>
                                <span>Menerapkan Perilaku Ramah Lingkungan Hidup (PRLH) menuju sekolah adiwiyata nasional.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">7</span>
                                <span>Mendampingi peserta didik dalam pembiasaan beribadah untuk meningkatkan ketaqwaan.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">8</span>
                                <span>Menerapkan pendidikan berbasis Budaya Yogyakarta dan Profil Pelajar Pancasila.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">9</span>
                                <span>Membangun kemitraan (Link and Match) dengan lembaga relevan dalam dan luar negeri.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold flex items-center justify-center shrink-0 mt-0.5 text-xs">10</span>
                                <span>Menyelenggarakan sertifikasi kompetensi dan bahasa asing bagi peserta didik.</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEJARAH / TIMELINE SECTION -->
    <section id="sejarah" class="py-20 bg-white border-t border-slate-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#F59E0B] font-bold uppercase tracking-wider text-xs sm:text-sm">PERJALANAN WAKTU</span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-1">Sejarah Panjang Kami</h2>
            </div>

            <div class="relative border-l-2 border-slate-200 ml-4 md:ml-32 space-y-12">
                <!-- Item 1919 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-[#F59E0B] border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-[#F59E0B]">1919</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Princess Juliana School (PJS)</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Didirikan sebagai Princess Juliana School (PJS) pada masa pemerintahan Hindia Belanda di Kompleks Jetis Yogyakarta.</p>
                </div>

                <!-- Item 1951 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-slate-900 border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-slate-900">1951</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Ijazah STM Pertama</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Ijazah pertama Sekolah Teknik Menengah Yogyakarta diterbitkan secara resmi setelah masa kemerdekaan RI.</p>
                </div>

                <!-- Item 1952 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-slate-900 border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-slate-900">1952</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Pemisahan STM I & STM II</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Dipecah menjadi STM Negeri I (Fokus Bangunan & Kimia) dan STM Negeri II (Fokus Listrik & Mesin).</p>
                </div>

                <!-- Item 1975 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-slate-900 border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-slate-900">1975</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Penggabungan STM Yogyakarta I</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Seluruh STM di kompleks Jetis digabung kembali secara terpadu menjadi STM Yogyakarta I.</p>
                </div>

                <!-- Item 1997 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-[#F59E0B] border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-[#F59E0B]">1997</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Perubahan Nama SMKN 2 Yogyakarta</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Secara resmi berganti nama menjadi SMK Negeri 2 Yogyakarta berdasarkan Nomenklatur Nasional Kemdikbud.</p>
                </div>

                <!-- Item 2007 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-slate-900 border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-slate-900">2007</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Penetapan Cagar Budaya</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Gedung dan komplek sekolah ditetapkan sebagai Cagar Budaya Warisan Nasional oleh Menteri Kebudayaan dan Pariwisata RI.</p>
                </div>

                <!-- Item 2008 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-slate-900 border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-slate-900">2008</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Sertifikat ISO 9001:2000</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Meraih Sertifikat ISO 9001:2000 dari lembaga sertifikasi internasional TÜV Rheinland Jerman.</p>
                </div>

                <!-- Item 2015 -->
                <div class="relative pl-8 md:pl-12 group">
                    <div class="absolute -left-3 top-1.5 w-6 h-6 rounded-full bg-[#F59E0B] border-4 border-white shadow-md"></div>
                    <div class="md:absolute md:-left-32 md:top-1 font-black text-xl text-[#F59E0B]">2015 - Kini</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Sekolah Rujukan Nasional & Pusat Keunggulan</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Menjadi Sekolah Rujukan Nasional dan SMK Pusat Keunggulan (Center of Excellence) Kemdikbudristek RI.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA BANNER -->
    <section class="py-20 bg-slate-950 text-white border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl text-center">
            <span class="px-4 py-1.5 rounded-full bg-[#F59E0B] text-slate-950 font-bold text-xs uppercase tracking-wider mb-6 inline-block">
                Kini
            </span>
            <h2 class="text-3xl sm:text-5xl font-black mb-6">Lebih dari 105 Tahun Mencetak Profesional</h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                Bergabunglah dengan sejarah panjang SMKN 2 Yogyakarta dan wujudkan cita-cita masa depanmu bersama kami.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/ppdb" class="px-8 py-4 bg-[#F59E0B] text-slate-950 font-black rounded-full hover:bg-amber-400 transition-all shadow-lg shadow-amber-500/20">
                    Daftar Siswa Baru
                </a>
                <a href="/jurusan/1" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-full hover:bg-white/20 transition-all">
                    Lihat Program Keahlian
                </a>
            </div>
        </div>
    </section>
</x-layout>
