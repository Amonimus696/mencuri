<x-layout>
    @php
        $jurusanList = [
            1 => [
                'nama' => 'Sistem Informatika, Jaringan dan Aplikasi',
                'singkatan' => 'SIJA',
                'durasi' => '4 Tahun',
                'akreditasi' => 'A',
                'icon' => '💻',
                'color' => 'blue',
                'deskripsi' => 'Program unggulan 4 tahun berstandar internasional. Menguasai cloud computing, keamanan siber, IoT, dan administrasi server. Lulusan langsung bersertifikasi Mikrotik Academy dan siap berkarir sebagai Network Engineer.',
                'kompetensi' => [
                    'Administrasi Server & Cloud Computing (AWS / Mikrotik)',
                    'Keamanan Jaringan & Cyber Security Basics',
                    'Pemrograman Web & Mobile App Development',
                    'Internet of Things (IoT) & Embedded Systems',
                    'Sertifikasi Mikrotik Certified Network Associate (MTCNA)'
                ],
                'mitra' => ['PT Telkom Indonesia', 'MikroTik Academy', 'AWS Educate', 'Indosat Ooredoo Hutchison']
            ],
            2 => [
                'nama' => 'Teknik Kendaraan Ringan Otomotif',
                'singkatan' => 'TKRO',
                'durasi' => '3 Tahun',
                'akreditasi' => 'A',
                'icon' => '🚗',
                'color' => 'red',
                'deskripsi' => 'Jurusan otomotif terlengkap dengan dukungan penuh dari Mitsubishi Motors. Belajar langsung dengan unit kendaraan asli (Outlander Sport) dari CSR KTB. Kurikulum CBT & PBE standar industri global.',
                'kompetensi' => [
                    'Pemeliharaan Mesin Kendaraan Ringan EFI & Diesel',
                    'Sistem Kelistrikan & EMS (Engine Management System)',
                    'Sistem Pemindah Tenaga & Chasis Otomotif',
                    'Diagnosa Kerusakan Berbasis Scanner OBD-II',
                    'Teknologi Kendaraan Listrik & Hybrid'
                ],
                'mitra' => ['Mitsubishi Motors Indonesia', 'PT Astra Honda Motor', 'Nasmoco Toyota', 'Auto2000']
            ],
            3 => [
                'nama' => 'Desain Komunikasi Visual / Multimedia',
                'singkatan' => 'DKV',
                'durasi' => '3 Tahun',
                'akreditasi' => 'A',
                'icon' => '🎨',
                'color' => 'purple',
                'deskripsi' => 'Pusat kreativitas digital SMKN 2 Yogyakarta. Menguasai fotografi, videografi, animasi 2D/3D, desain grafis, dan UI/UX. Dilengkapi studio produksi profesional dan software industri terkini.',
                'kompetensi' => [
                    'Desain Grafis & Brand Identity (Adobe Photoshop / Illustrator)',
                    'Produksi Audio Visual & Videografi Profesional',
                    'Animasi 2D & 3D (Blender / After Effects)',
                    'UI/UX Design & Prototyping Digital',
                    'Fotografi Studio & Editing Digital'
                ],
                'mitra' => ['Studio Animasi Jogja', 'Kilas Media Digital', 'TVRI Yogyakarta', 'Agensi Kreatif DUDI']
            ],
            4 => [
                'nama' => 'Teknik Instalasi Tenaga Listrik',
                'singkatan' => 'TITL',
                'durasi' => '3 Tahun',
                'akreditasi' => 'A',
                'icon' => '⚡',
                'color' => 'amber',
                'deskripsi' => 'Ahli kelistrikan industri dan rumah tangga. Menguasai instalasi panel listrik, sistem kendali PLC, dan otomasi industri. Peluang karir terbuka lebar di BUMN kelistrikan dan perusahaan manufaktur.',
                'kompetensi' => [
                    'Instalasi Penerangan & Tenaga Listrik Bangunan',
                    'Sistem Otomasi Industri Berbasis PLC (Schneider)',
                    'Pemasangan & Maintenance Panel Listrik Industri',
                    'Teknologi Smart Home & Energi Terbarukan',
                    'K3 Listrik & Standardisasi PUIL 2011'
                ],
                'mitra' => ['PT PLN (Persero)', 'Schneider Electric', 'PT Siemens Indonesia', 'PT PJB']
            ],
            5 => [
                'nama' => 'Teknik Pemesinan',
                'singkatan' => 'TP',
                'durasi' => '3 Tahun',
                'akreditasi' => 'A',
                'icon' => '⚙️',
                'color' => 'slate',
                'deskripsi' => 'Jurusan legendaris sejak era STM 1. Menguasai mesin bubut, frais, gerinda, dan CNC (Computer Numerical Control). Lulusan menjadi teknisi presisi tinggi yang dibutuhkan industri manufaktur pesawat, otomotif, dan permesinan.',
                'kompetensi' => [
                    'Pengoperasian Mesin Bubut & Frais Konvensional',
                    'Pemrograman & Pengoperasian Mesin CNC Milling & Turning',
                    'Pengukuran Presisi Berbasis Jangka Sorong & Mikrometer',
                    'Desain Manufaktur CAD/CAM (Mastercam / SolidWorks)',
                    'Perawatan & Perbaikan Perkakasan Industri'
                ],
                'mitra' => ['PT United Tractors', 'PT Dirgantara Indonesia', 'YAMAHA Indonesia', 'PT Pindad']
            ],
            6 => [
                'nama' => 'Desain Pemodelan dan Informasi Bangunan',
                'singkatan' => 'DPIB',
                'durasi' => '3 Tahun',
                'akreditasi' => 'A',
                'icon' => '📐',
                'color' => 'emerald',
                'deskripsi' => 'Arsitektur dan teknik sipil era digital. Merancang gedung bertingkat menggunakan AutoCAD, SketchUp, dan BIM (Building Information Modeling). Menjadi drafter dan desainer bangunan profesional yang dibutuhkan kontraktor nasional.',
                'kompetensi' => [
                    'Perencanaan Gambar Arsitektur & Struktur Gedung',
                    'Permodelan 3D Building Information Modeling (BIM / Revit)',
                    'Visualisasi Render & Animasi Arsitektur (Lumion / SketchUp)',
                    'Perhitungan Rencana Anggaran Biaya (RAB)',
                    'Survey Lapangan & Pemetaan Konstruksi'
                ],
                'mitra' => ['PT Wijaya Karya (WIKA)', 'PT PP (Persero)', 'PT Adhi Karya', 'Ikatan Arsitek Indonesia']
            ]
        ];

        $currentId = is_numeric($id) && isset($jurusanList[(int)$id]) ? (int)$id : 1;
        $j = $jurusanList[$currentId];
    @endphp

    <x-slot name="title">{{ $j['nama'] }} - SMKN 2 Yogyakarta</x-slot>

    <!-- JURUSAN HERO HEADER -->
    <section class="relative bg-slate-950 text-white pt-28 pb-16 overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#F59E0B_1px,transparent_1px)] [background-size:20px_20px]"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
            <!-- Breadcrumb / Back Link -->
            <a href="/#jurusan" class="inline-flex items-center gap-2 text-[#F59E0B] font-bold text-xs sm:text-sm hover:underline mb-8">
                &larr; Kembali ke Daftar Program Keahlian
            </a>

            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div class="w-20 h-20 rounded-3xl bg-[#F59E0B] text-slate-950 flex items-center justify-center text-4xl font-black shadow-xl shrink-0">
                    {{ $j['icon'] }}
                </div>
                <div class="space-y-3 max-w-4xl">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 border border-white/20 text-[#F59E0B] font-bold text-xs uppercase tracking-wider">
                        {{ $j['durasi'] }} • Akreditasi {{ $j['akreditasi'] }}
                    </div>
                    <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        {{ $j['nama'] }}
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                        {{ $j['deskripsi'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT GRID -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Kompetensi -->
                <div class="lg:col-span-8 space-y-8">
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                        <h3 class="text-2xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] flex items-center justify-center text-sm font-bold">✓</span>
                            Kompetensi Utama yang Dipelajari
                        </h3>
                        <ul class="space-y-4">
                            @foreach($j['kompetensi'] as $k)
                                <li class="flex items-start gap-3 text-slate-700 text-sm sm:text-base">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                                    <span>{{ $k }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Prestasi Unggulan -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                        <h3 class="text-2xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            🏆 Prestasi Unggulan Jurusan
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Medali Emas</div>
                                <div class="font-bold text-slate-900 text-sm">LKS Tingkat Nasional 2024</div>
                                <p class="text-xs text-slate-500 mt-1">Juara 1 Bidang Keterampilan Vokasi Industri.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-xs text-[#F59E0B] font-bold uppercase mb-1">Juara Utama</div>
                                <div class="font-bold text-slate-900 text-sm">Technical Contest Industry 2025</div>
                                <p class="text-xs text-slate-500 mt-1">Sertifikasi Kompetensi Terbaik Tingkat DUDI.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sidebar Mitra & PPDB -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Mitra Card -->
                    <div class="bg-slate-900 text-white rounded-3xl p-8 shadow-xl">
                        <h3 class="text-xl font-bold text-[#F59E0B] mb-4">Mitra Industri Terkemuka</h3>
                        <p class="text-xs text-slate-400 mb-6">Program keahlian ini bekerjasama langsung dalam penyaluran PKL & Rekrutmen Kerja:</p>
                        <ul class="space-y-3 text-sm text-slate-200">
                            @foreach($j['mitra'] as $m)
                                <li class="flex items-center gap-2.5">
                                    <span class="w-2 h-2 rounded-full bg-[#F59E0B]"></span>
                                    <span>{{ $m }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- CTA Register Card -->
                    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white rounded-3xl p-8 shadow-xl space-y-4">
                        <h3 class="text-xl font-black">Tertarik Jurusan Ini?</h3>
                        <p class="text-xs text-blue-100 leading-relaxed">
                            Pendaftaran PPDB 2026 telah dibuka secara resmi. Amankan kuota pendaftaran Anda sekarang!
                        </p>
                        <a href="/ppdb" class="block w-full text-center py-3 bg-[#F59E0B] text-slate-950 font-black rounded-2xl text-sm hover:bg-amber-400 transition-colors shadow-md">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
