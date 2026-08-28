<x-layout>
    <x-slot name="title">Info PPDB - SMKN 2 Yogyakarta</x-slot>

    <!-- PPDB HERO -->
    <section class="relative bg-slate-950 text-white pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/20 border border-accent/30 text-accent font-bold text-xs uppercase tracking-widest mb-6">
                Penerimaan Peserta Didik Baru
            </div>
            <h1 class="text-4xl sm:text-6xl font-black tracking-tight mb-6">
                Informasi Resmi <span class="text-accent">PPDB SMKN 2 Yogyakarta</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-xl max-w-3xl mx-auto leading-relaxed">
                Bergabunglah menjadi bagian dari Sekolah Pusat Keunggulan. Siapkan berkas dan ikuti petunjuk pendaftaran di bawah ini.
            </p>
        </div>
    </section>

    <!-- PPDB CONTENT -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Info -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Step 1 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                        <h3 class="text-2xl font-black text-slate-900 mb-4 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-accent text-slate-950 flex items-center justify-center font-black text-lg">1</span>
                            Jalur Pendaftaran
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="font-bold text-slate-900 text-base mb-1">Jalur ZONASI (50%)</div>
                                <p class="text-xs text-slate-600">Berdasarkan wilayah domisili terdekat dengan lokasi sekolah.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="font-bold text-slate-900 text-base mb-1">Jalur PRESTASI (30%)</div>
                                <p class="text-xs text-slate-600">Berdasarkan nilai rapor SMP/MTs & sertifikat kejuaraan.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="font-bold text-slate-900 text-base mb-1">Jalur AFIRMASI (15%)</div>
                                <p class="text-xs text-slate-600">Bagi keluarga pemegang Kartu Indonesia Pintar (KIP) / PKH.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="font-bold text-slate-900 text-base mb-1">Jalur PERPINDAHAN TUGAS (5%)</div>
                                <p class="text-xs text-slate-600">Bagi calon siswa dari orang tua yang pindah tugas resmi.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                        <h3 class="text-2xl font-black text-slate-900 mb-4 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-accent text-slate-950 flex items-center justify-center font-black text-lg">2</span>
                            Persyaratan Berkas
                        </h3>
                        <ul class="space-y-3 text-slate-700 text-sm">
                            <li class="flex items-center gap-3">
                                <span class="text-accent font-bold">✓</span>
                                <span>Ijazah / Surat Keterangan Lulus (SKL) SMP/MTs sederajat.</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-accent font-bold">✓</span>
                                <span>Kartu Keluarga (KK) & Akta Kelahiran asli dan fotokopi.</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-accent font-bold">✓</span>
                                <span>Surat Keterangan Bebas Buta Warna (Khusus Jurusan Teknik).</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-accent font-bold">✓</span>
                                <span>Pas foto terbaru ukuran 3x4 (4 lembar background merah).</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Call Center -->
                <div class="space-y-6">
                    <div class="bg-slate-900 text-white rounded-3xl p-8 shadow-xl">
                        <h3 class="text-xl font-bold mb-4">Butuh Bantuan PPDB?</h3>
                        <p class="text-slate-300 text-sm mb-6">Panitia PPDB SMKN 2 Yogyakarta siap melayani konsultasi pendaftaran online & verifikasi fisik.</p>
                        <div class="space-y-4 text-sm">
                            <div>
                                <div class="text-xs text-accent font-bold uppercase">Jam Pelayanan:</div>
                                <div class="font-medium">Senin - Jumat (08.00 - 15.00 WIB)</div>
                            </div>
                            <div>
                                <div class="text-xs text-accent font-bold uppercase">Hotline / WhatsApp:</div>
                                <div class="font-medium text-lg text-accent">0812-3456-7890</div>
                            </div>
                            <div>
                                <div class="text-xs text-accent font-bold uppercase">Alamat Sekretariat:</div>
                                <div class="font-medium text-slate-300">Gedung Utama SMKN 2 Yogyakarta, Jl. A.M. Sangaji No. 47</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
