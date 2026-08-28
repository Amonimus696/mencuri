@php
$beritaList = [
    1=>['judul'=>'Tim Adiwiyata SMKN 2 Yogya Gelar Aksi Bersih Sungai Peringati Hari Lingkungan Hidup','tgl'=>'10 Juni 2025','kat'=>'Lingkungan','katColor'=>'#059669','katBg'=>'#f0fdf4',
        'isi'=>'Sebagai sekolah berwawasan lingkungan, tim Adiwiyata SMKN 2 turun langsung membersihkan sungai dan lingkungan sekolah bersama ratusan siswa dan guru. Kegiatan ini merupakan bentuk nyata komitmen SMKN 2 Yogyakarta dalam menjaga kelestarian lingkungan hidup. Ratusan siswa dari berbagai program keahlian bersatu untuk membersihkan Sungai Code yang mengalir di dekat area sekolah. Selain membersihkan sampah di bantaran sungai, tim juga melakukan penanaman pohon dan sosialisasi pengurangan penggunaan plastik kepada masyarakat sekitar.'],
    2=>['judul'=>'SMKN 2 Yogyakarta Raih 4 Medali di Mitsubishi Technical Skill Contest 2025','tgl'=>'25 Mei 2025','kat'=>'Prestasi Otomotif','katColor'=>'#2563eb','katBg'=>'#eff6ff',
        'isi'=>'Membuktikan kualitas standar industri, siswa jurusan TKRO berhasil mendominasi kompetisi otomotif nasional yang diadakan langsung oleh Mitsubishi Motors Indonesia. Tim SMKN 2 Yogyakarta berhasil membawa pulang 2 medali emas, 1 medali perak, dan 1 medali perunggu dalam ajang bergengsi Mitsubishi Technical Skill Contest 2025. Kompetisi ini diikuti oleh lebih dari 200 peserta dari seluruh SMK mitra Mitsubishi di Indonesia. Para siswa diuji kemampuannya dalam diagnosa kerusakan, servis mesin, dan pemahaman teknologi kendaraan terbaru.'],
    3=>['judul'=>'Siswa SMKN 2 Yogyakarta Raih Medali Emas FIKSI 2024 di Jakarta','tgl'=>'12 April 2025','kat'=>'Inovasi Nasional','katColor'=>'#7c3aed','katBg'=>'#f5f3ff',
        'isi'=>'Karya inovasi teknologi dari tim SIJA sukses meraih medali emas di Festival Inovasi dan Kewirausahaan Siswa Indonesia tingkat nasional. Tim yang beranggotakan 3 siswa program keahlian Sistem Informatika, Jaringan dan Aplikasi (SIJA) mengembangkan sistem monitoring kualitas udara berbasis IoT yang dapat diakses secara real-time melalui aplikasi mobile. Karya inovatif ini berhasil mengalahkan ratusan tim dari seluruh Indonesia dan mendapatkan pengakuan langsung dari Kementerian Pendidikan dan Kebudayaan RI.'],
];
$currentId = is_numeric($id) && isset($beritaList[(int)$id]) ? (int)$id : 1;
$b = $beritaList[$currentId];
@endphp
<x-layout>
<x-slot name="title">{{ $b['judul'] }} - SMKN 2 Yogyakarta</x-slot>

<!-- ===== DETAIL HERO ===== -->
<section style="background:#020617; padding:7rem 0 4rem; border-bottom:1px solid #0f172a;">
    <div class="container mx-auto max-w-4xl">
        <a href="/berita" style="display:inline-flex; align-items:center; gap:0.5rem; color:#f59e0b; font-size:0.8125rem; font-weight:700; text-decoration:none; margin-bottom:2rem;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">← Kembali ke Semua Berita</a>

        <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1.25rem; flex-wrap:wrap;">
            <span style="padding:0.25rem 0.875rem; border-radius:9999px; background:{{ $b['katBg'] }}; color:{{ $b['katColor'] }}; font-size:0.6875rem; font-weight:700; letter-spacing:0.06em; text-transform:uppercase;">{{ $b['kat'] }}</span>
            <span style="font-size:0.8125rem; color:#64748b; font-weight:600;">{{ $b['tgl'] }}</span>
        </div>

        <h1 style="font-size:clamp(1.75rem,4vw,2.75rem); font-weight:900; color:#f8fafc; letter-spacing:-0.03em; line-height:1.2;">{{ $b['judul'] }}</h1>
    </div>
</section>

<!-- ===== ARTICLE BODY ===== -->
<section style="background:#f8fafc; padding:4rem 0;">
    <div class="container mx-auto max-w-4xl">
        <div class="card-white" style="padding:3rem;">
            <p style="font-size:1.0625rem; color:#475569; line-height:1.85;">{{ $b['isi'] }}</p>

            <div style="margin-top:3rem; padding-top:2rem; border-top:1px solid #e2e8f0; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
                <a href="/berita" class="btn-dark">← Berita Lainnya</a>
                <a href="/ppdb"   class="btn-primary">Daftar PPDB 2026 →</a>
            </div>
        </div>
    </div>
</section>

</x-layout>
