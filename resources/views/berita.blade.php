<x-layout>
<x-slot name="title">Berita & Pengumuman - SMKN 2 Yogyakarta</x-slot>

<!-- ===== BERITA HERO ===== -->
<section style="background:#020617; padding:7rem 0 5rem; border-bottom:1px solid #0f172a; text-align:center;">
    <div class="container mx-auto max-w-5xl">
        <span class="section-label">Kabar Terbaru SMKN 2 YK</span>
        <h1 style="font-size:clamp(2.25rem,5vw,3.5rem); font-weight:900; color:#f8fafc; letter-spacing:-0.04em; line-height:1.1; margin:0.5rem 0 1rem;">
            Berita & <span class="text-gradient-amber">Pengumuman</span>
        </h1>
        <p style="color:#94a3b8; font-size:1rem; max-width:480px; margin:0 auto; line-height:1.7;">
            Informasi seputar kegiatan, prestasi siswa, agenda sekolah, dan pengumuman resmi SMKN 2 Yogyakarta.
        </p>
    </div>
</section>

<!-- ===== BERITA GRID ===== -->
<section style="background:#f8fafc; padding:4.5rem 0;">
    <div class="container mx-auto max-w-7xl">
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(300px,1fr)); gap:1.5rem;">
            @php $berita = [
                ['id'=>1,'tgl'=>'10 Juni 2025',  'kat'=>'Lingkungan',       'katColor'=>'#059669','katBg'=>'#f0fdf4',
                 'judul'=>'Tim Adiwiyata SMKN 2 Yogya Gelar Aksi Bersih Sungai Peringati Hari Lingkungan Hidup',
                 'desc'=>'Sebagai sekolah berwawasan lingkungan, tim Adiwiyata SMKN 2 turun langsung membersihkan sungai dan lingkungan sekolah bersama ratusan siswa dan guru.'],
                ['id'=>2,'tgl'=>'25 Mei 2025',   'kat'=>'Prestasi Otomotif','katColor'=>'#2563eb','katBg'=>'#eff6ff',
                 'judul'=>'SMKN 2 Yogyakarta Raih 4 Medali di Mitsubishi Technical Skill Contest 2025',
                 'desc'=>'Siswa jurusan TKRO berhasil mendominasi kompetisi otomotif nasional yang diadakan langsung oleh Mitsubishi Motors Indonesia.'],
                ['id'=>3,'tgl'=>'12 April 2025', 'kat'=>'Inovasi Nasional', 'katColor'=>'#7c3aed','katBg'=>'#f5f3ff',
                 'judul'=>'Siswa SMKN 2 Yogyakarta Raih Medali Emas FIKSI 2024 di Jakarta',
                 'desc'=>'Karya inovasi teknologi dari tim SIJA sukses meraih medali emas di Festival Inovasi dan Kewirausahaan Siswa Indonesia tingkat nasional.'],
            ]; @endphp
            @foreach($berita as $b)
            <div class="card-white" style="display:flex; flex-direction:column; justify-content:space-between;">
                <div>
                    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
                        <span style="padding:0.25rem 0.75rem; border-radius:9999px; background:{{ $b['katBg'] }}; color:{{ $b['katColor'] }}; font-size:0.6875rem; font-weight:700; letter-spacing:0.05em; text-transform:uppercase;">{{ $b['kat'] }}</span>
                        <span style="font-size:0.75rem; color:#94a3b8; font-weight:600;">{{ $b['tgl'] }}</span>
                    </div>
                    <h3 style="font-size:1rem; font-weight:800; color:#0f172a; line-height:1.45; letter-spacing:-0.01em; margin-bottom:0.75rem;">{{ $b['judul'] }}</h3>
                    <p style="font-size:0.875rem; color:#64748b; line-height:1.65; margin-bottom:1.5rem;">{{ $b['desc'] }}</p>
                </div>
                <a href="/berita/{{ $b['id'] }}" style="font-size:0.8125rem; font-weight:700; color:#2563eb; text-decoration:none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Baca Selengkapnya →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

</x-layout>
