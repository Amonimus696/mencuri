@php
$jurusanList = [
    1=>['nama'=>'Sistem Informatika, Jaringan dan Aplikasi','singkatan'=>'SIJA','durasi'=>'4 Tahun','icon'=>'💻','color'=>'#2563eb',
        'desc'=>'Program unggulan 4 tahun berstandar internasional. Menguasai cloud computing, keamanan siber, IoT, dan administrasi server. Lulusan bersertifikasi Mikrotik Academy.',
        'kompetensi'=>['Administrasi Server & Cloud Computing (AWS / Mikrotik)','Keamanan Jaringan & Cyber Security Basics','Pemrograman Web & Mobile App Development','Internet of Things (IoT) & Embedded Systems','Sertifikasi Mikrotik Certified Network Associate (MTCNA)'],
        'mitra'=>['PT Telkom Indonesia','MikroTik Academy','AWS Educate','Indosat Ooredoo Hutchison']],
    2=>['nama'=>'Teknik Kendaraan Ringan Otomotif','singkatan'=>'TKRO','durasi'=>'3 Tahun','icon'=>'🚗','color'=>'#dc2626',
        'desc'=>'Jurusan otomotif terlengkap dengan dukungan penuh Mitsubishi Motors. Belajar langsung dengan unit Outlander Sport. Kurikulum CBT & PBE standar industri global.',
        'kompetensi'=>['Pemeliharaan Mesin EFI & Diesel','Sistem Kelistrikan & Engine Management System','Sistem Pemindah Tenaga & Chasis Otomotif','Diagnosa Berbasis Scanner OBD-II','Teknologi Kendaraan Listrik & Hybrid'],
        'mitra'=>['Mitsubishi Motors Indonesia','PT Astra Honda Motor','Nasmoco Toyota','Auto2000']],
    3=>['nama'=>'Desain Komunikasi Visual / Multimedia','singkatan'=>'DKV','durasi'=>'3 Tahun','icon'=>'🎨','color'=>'#7c3aed',
        'desc'=>'Pusat kreativitas digital SMKN 2 Yogyakarta. Menguasai fotografi, videografi, animasi 2D/3D, desain grafis, dan UI/UX dengan studio produksi profesional.',
        'kompetensi'=>['Desain Grafis & Brand Identity (Adobe Photoshop/Illustrator)','Produksi Audio Visual & Videografi Profesional','Animasi 2D & 3D (Blender / After Effects)','UI/UX Design & Prototyping Digital','Fotografi Studio & Editing Digital'],
        'mitra'=>['Studio Animasi Jogja','Kilas Media Digital','TVRI Yogyakarta','Agensi Kreatif DUDI']],
    4=>['nama'=>'Teknik Instalasi Tenaga Listrik','singkatan'=>'TITL','durasi'=>'3 Tahun','icon'=>'⚡','color'=>'#d97706',
        'desc'=>'Ahli kelistrikan industri & rumah tangga. Menguasai instalasi panel listrik, PLC, dan otomasi industri. Peluang karir di BUMN kelistrikan dan manufaktur.',
        'kompetensi'=>['Instalasi Penerangan & Tenaga Listrik Bangunan','Sistem Otomasi Industri Berbasis PLC (Schneider)','Pemasangan & Maintenance Panel Listrik Industri','Teknologi Smart Home & Energi Terbarukan','K3 Listrik & Standardisasi PUIL 2011'],
        'mitra'=>['PT PLN (Persero)','Schneider Electric','PT Siemens Indonesia','PT PJB']],
    5=>['nama'=>'Teknik Pemesinan','singkatan'=>'TP','durasi'=>'3 Tahun','icon'=>'⚙️','color'=>'#334155',
        'desc'=>'Jurusan legendaris sejak era STM 1. Menguasai mesin bubut, frais, gerinda, dan CNC. Lulusan menjadi teknisi presisi tinggi untuk industri manufaktur pesawat & otomotif.',
        'kompetensi'=>['Pengoperasian Mesin Bubut & Frais Konvensional','Pemrograman & Pengoperasian Mesin CNC Milling & Turning','Pengukuran Presisi (Jangka Sorong & Mikrometer)','Desain Manufaktur CAD/CAM (Mastercam / SolidWorks)','Perawatan & Perbaikan Perkakasan Industri'],
        'mitra'=>['PT United Tractors','PT Dirgantara Indonesia','YAMAHA Indonesia','PT Pindad']],
    6=>['nama'=>'Desain Pemodelan dan Informasi Bangunan','singkatan'=>'DPIB','durasi'=>'3 Tahun','icon'=>'📐','color'=>'#059669',
        'desc'=>'Arsitektur dan teknik sipil era digital. Merancang gedung bertingkat dengan AutoCAD, SketchUp, dan BIM (Building Information Modeling).',
        'kompetensi'=>['Perencanaan Gambar Arsitektur & Struktur Gedung','Permodelan 3D BIM (Building Information Modeling / Revit)','Visualisasi Render & Animasi Arsitektur (Lumion / SketchUp)','Perhitungan Rencana Anggaran Biaya (RAB)','Survey Lapangan & Pemetaan Konstruksi'],
        'mitra'=>['PT Wijaya Karya (WIKA)','PT PP (Persero)','PT Adhi Karya','Ikatan Arsitek Indonesia']],
    7=>['nama'=>'Konstruksi Gedung, Sanitasi dan Perawatan','singkatan'=>'KGSP','durasi'=>'3 Tahun','icon'=>'🏗️','color'=>'#ea580c',
        'desc'=>'Ahli konstruksi bangunan dan utilitas gedung. Menguasai teknik konstruksi batu beton, sanitasi, dan perawatan gedung bertingkat untuk proyek infrastruktur besar.',
        'kompetensi'=>['Teknik Konstruksi Batu, Bata & Beton','Pemasangan Instalasi Sanitasi & Plumbing','Perawatan & Manajemen Gedung Bertingkat','Keselamatan Kerja Proyek Konstruksi (K3)','Estimasi Biaya & RAB Konstruksi'],
        'mitra'=>['PT Pembangunan Perumahan','PT Brantas Abipraya','Dinas PUPR DIY','Kontraktor Nasional Lainnya']],
    8=>['nama'=>'Teknik Audio Video','singkatan'=>'TAV','durasi'=>'3 Tahun','icon'=>'📻','color'=>'#4f46e5',
        'desc'=>'Spesialis elektronika dan penyiaran. Menguasai sistem tata suara profesional, instalasi perangkat audio visual, dan teknologi broadcasting.',
        'kompetensi'=>['Perawatan & Perbaikan Peralatan Audio Video','Instalasi Sistem Tata Suara Profesional','Teknologi Penyiaran & Broadcasting','Elektronika Dasar & Lanjutan','Kalibrasi & Pengujian Peralatan AV'],
        'mitra'=>['TVRI Yogyakarta','RRI Yogyakarta','Studio Recording Lokal','Distributor Elektronika Nasional']],
    9=>['nama'=>'Teknik Geomatika / Survey Pemetaan','singkatan'=>'Geo','durasi'=>'3 Tahun','icon'=>'🗺️','color'=>'#0891b2',
        'desc'=>'Menjadi surveyor profesional & ahli pemetaan modern. Menguasai GPS, pemetaan drone, GIS, dan levelling presisi untuk proyek infrastruktur berskala besar.',
        'kompetensi'=>['Survey Topografi & Pemetaan GPS','Pengolahan Data Spasial dengan GIS (ArcGIS / QGIS)','Pemetaan Udara dengan Drone / UAV','Levelling Presisi & Pengukuran Konstruksi','Pembuatan Peta Digital & Kartografi'],
        'mitra'=>['BIG (Badan Informasi Geospasial)','Dinas PUPR DIY','PT Surveyor Indonesia','Perusahaan Infrastruktur Nasional']],
];
$currentId = (is_numeric($id) && isset($jurusanList[(int)$id])) ? (int)$id : 1;
$j = $jurusanList[$currentId];
@endphp
<x-layout>
<x-slot name="title">{{ $j['nama'] }} - SMKN 2 Yogyakarta</x-slot>

<!-- ===== JURUSAN HERO ===== -->
<section style="background:#020617; padding:7rem 0 4rem; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; background-image:radial-gradient(rgba(245,158,11,0.05) 1px, transparent 1px); background-size:28px 28px; opacity:1;"></div>
    <div class="container mx-auto max-w-7xl" style="position:relative; z-index:1;">
        <a href="/#jurusan" style="display:inline-flex; align-items:center; gap:0.5rem; color:#f59e0b; font-size:0.8125rem; font-weight:700; margin-bottom:2rem; text-decoration:none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">← Kembali ke Daftar Program Keahlian</a>

        <div style="display:flex; gap:1.5rem; align-items:flex-start; flex-wrap:wrap;">
            <div style="width:5rem; height:5rem; border-radius:1.25rem; background:rgba(245,158,11,0.15); border:1px solid rgba(245,158,11,0.3); display:flex; align-items:center; justify-content:center; font-size:2.5rem; flex-shrink:0;">
                {{ $j['icon'] }}
            </div>
            <div style="flex:1; min-width:280px;">
                <div class="pill pill-amber" style="display:inline-flex; margin-bottom:1rem;">{{ $j['durasi'] }} • Akreditasi A</div>
                <h1 style="font-size:clamp(1.75rem,4vw,3rem); font-weight:900; color:#f8fafc; letter-spacing:-0.03em; line-height:1.15; margin-bottom:1rem;">{{ $j['nama'] }}</h1>
                <p style="color:#94a3b8; font-size:1.0625rem; line-height:1.75; max-width:680px;">{{ $j['desc'] }}</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== MAIN CONTENT ===== -->
<section style="background:#f8fafc; padding:4rem 0;">
    <div class="container mx-auto max-w-7xl">
        <div style="display:grid; grid-template-columns:1fr 360px; gap:2rem; align-items:start;">

            <!-- Left: Kompetensi + Prestasi -->
            <div style="display:flex; flex-direction:column; gap:1.5rem;">
                <!-- Kompetensi -->
                <div class="card-white">
                    <h3 style="font-size:1.25rem; font-weight:800; color:#0f172a; letter-spacing:-0.02em; margin-bottom:1.5rem;">✅ Kompetensi Utama yang Dipelajari</h3>
                    <div style="display:flex; flex-direction:column; gap:1rem;">
                        @foreach($j['kompetensi'] as $k)
                        <div class="check-item">
                            <div class="check-icon">✓</div>
                            <span>{{ $k }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Prestasi -->
                <div class="card-white">
                    <h3 style="font-size:1.25rem; font-weight:800; color:#0f172a; letter-spacing:-0.02em; margin-bottom:1.5rem;">🏆 Prestasi Unggulan Jurusan</h3>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div style="padding:1.25rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem;">
                            <div style="font-size:0.6875rem; font-weight:700; letter-spacing:0.06em; text-transform:uppercase; color:#f59e0b; margin-bottom:0.375rem;">Medali Emas</div>
                            <div style="font-weight:800; color:#0f172a; font-size:0.9375rem;">LKS Tingkat Nasional 2024</div>
                            <p style="font-size:0.8125rem; color:#94a3b8; margin-top:0.375rem;">Juara 1 Bidang Keterampilan Vokasi Industri.</p>
                        </div>
                        <div style="padding:1.25rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem;">
                            <div style="font-size:0.6875rem; font-weight:700; letter-spacing:0.06em; text-transform:uppercase; color:#f59e0b; margin-bottom:0.375rem;">Juara Utama</div>
                            <div style="font-weight:800; color:#0f172a; font-size:0.9375rem;">Technical Contest Industry 2025</div>
                            <p style="font-size:0.8125rem; color:#94a3b8; margin-top:0.375rem;">Sertifikasi Kompetensi Terbaik Tingkat DUDI.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Mitra + CTA -->
            <div style="display:flex; flex-direction:column; gap:1.5rem;">
                <!-- Mitra Industri -->
                <div style="background:#0f172a; border:1px solid #1e293b; border-radius:1.5rem; padding:2rem;">
                    <h3 style="font-size:1.0625rem; font-weight:800; color:#f59e0b; margin-bottom:0.5rem;">Mitra Industri Terkemuka</h3>
                    <p style="font-size:0.8125rem; color:#64748b; margin-bottom:1.25rem; line-height:1.6;">Bekerjasama langsung dalam penyaluran PKL & rekrutmen kerja:</p>
                    <div style="display:flex; flex-direction:column; gap:0.75rem;">
                        @foreach($j['mitra'] as $m)
                        <div style="display:flex; align-items:center; gap:0.625rem; font-size:0.875rem; color:#cbd5e1;">
                            <span style="width:0.5rem; height:0.5rem; border-radius:9999px; background:#f59e0b; flex-shrink:0;"></span>
                            {{ $m }}
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- CTA Register -->
                <div style="background:linear-gradient(135deg,#2563eb,#4338ca); border-radius:1.5rem; padding:2rem; text-align:center;">
                    <h3 style="font-size:1.125rem; font-weight:900; color:#fff; margin-bottom:0.625rem;">Tertarik Jurusan Ini?</h3>
                    <p style="font-size:0.8125rem; color:rgba(255,255,255,0.7); margin-bottom:1.5rem; line-height:1.6;">Pendaftaran PPDB 2026 telah dibuka. Amankan kuota Anda sekarang!</p>
                    <a href="/ppdb" class="btn-primary" style="width:100%; justify-content:center;">Daftar Sekarang</a>
                </div>

                <!-- Other Jurusan Quick Links -->
                <div class="card-white" style="padding:1.5rem;">
                    <h4 style="font-size:0.875rem; font-weight:800; color:#0f172a; margin-bottom:1rem;">Program Keahlian Lainnya</h4>
                    <div style="display:flex; flex-direction:column; gap:0.5rem;">
                        @foreach($jurusanList as $otherId => $other)
                            @if($otherId !== $currentId)
                            <a href="/jurusan/{{ $otherId }}" style="display:flex; align-items:center; gap:0.625rem; padding:0.625rem 0.875rem; border-radius:0.75rem; background:#f8fafc; font-size:0.8125rem; font-weight:600; color:#475569; text-decoration:none; transition:background-color 0.2s;" onmouseover="this.style.background='rgba(245,158,11,0.1)';this.style.color='#f59e0b';" onmouseout="this.style.background='#f8fafc';this.style.color='#475569';">
                                <span>{{ $other['icon'] }}</span>
                                <span>{{ $other['singkatan'] }} — {{ $other['nama'] }}</span>
                            </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layout>
