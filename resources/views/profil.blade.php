<x-layout>
<x-slot name="title">Profil Sekolah - SMKN 2 Yogyakarta</x-slot>

<!-- ===== HERO ===== -->
<section class="hero-section" style="min-height:75vh;">
    <div class="hero-video-wrap">
        <iframe src="https://www.youtube.com/embed/R1NA1pnGVfw?autoplay=1&mute=1&loop=1&playlist=R1NA1pnGVfw&controls=0&showinfo=0&rel=0&iv_load_policy=3&playsinline=1&disablekb=1"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <div class="hero-overlay"></div>

    <div class="container mx-auto max-w-7xl relative z-10" style="text-align:center;">
        <div class="pill pill-amber" style="display:inline-flex; margin-bottom:1.5rem;">
            🏛️ Gedung Cagar Budaya Nasional — Didirikan 1919
        </div>
        <h1 style="font-size:clamp(2.5rem,6vw,4.5rem); font-weight:900; letter-spacing:-0.04em; line-height:1.08; color:#f8fafc; margin-bottom:1.25rem;">
            Profil <span class="text-gradient-amber">Sekolah</span>
        </h1>
        <p style="font-size:1.125rem; color:#94a3b8; line-height:1.75; max-width:560px; margin:0 auto 2.5rem;">
            Eks. Princess Juliana School (PJS) / STM 1 Yogyakarta — Sekolah teknik tertua dan paling bersejarah di Yogyakarta yang mencetak SDM Vokasi Bertaraf Internasional.
        </p>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:1rem;">
            <a href="#visi-misi" class="btn-primary">Visi &amp; Misi</a>
            <a href="#sejarah"   class="btn-ghost">Perjalanan Sejarah</a>
        </div>
    </div>
</section>

<!-- ===== 6 FACT CARDS ===== -->
<section style="background:#0f172a; padding:4rem 0; border-top:1px solid #1e293b;">
    <div class="container mx-auto max-w-7xl">
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(240px,1fr)); gap:1rem;">
            @php
            $facts = [
                ['label'=>'Nama Resmi',        'val'=>'SMK Negeri 2 Yogyakarta'],
                ['label'=>'Nama Sejarah',       'val'=>'STM 1 / Princess Juliana School'],
                ['label'=>'Tahun Berdiri',      'val'=>'1919 (105+ Tahun)'],
                ['label'=>'Akreditasi',         'val'=>'A (Sangat Baik)'],
                ['label'=>'Sertifikasi',        'val'=>'ISO 9001:2008 TÜV Rheinland'],
                ['label'=>'Luas Area Kampus',   'val'=>'5,5 Hektar Kompleks Jetis'],
            ];
            @endphp
            @foreach($facts as $f)
            <div style="background:#1e293b; border:1px solid #334155; border-radius:1.25rem; padding:1.5rem;">
                <div style="font-size:0.6875rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#f59e0b; margin-bottom:0.375rem;">{{ $f['label'] }}</div>
                <div style="font-size:1.0625rem; font-weight:800; color:#f8fafc; letter-spacing:-0.01em;">{{ $f['val'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== VISI & MISI ===== -->
<section id="visi-misi" style="background:#f8fafc; padding:5rem 0; border-top:1px solid #e2e8f0;">
    <div class="container mx-auto max-w-7xl">
        <div style="text-align:center; max-width:600px; margin:0 auto 3.5rem;">
            <span class="section-label">Landasan Utama</span>
            <h2 class="section-title">Fondasi <span class="text-gradient-amber">Pendidikan Kami</span></h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:1.5rem;">
            <!-- Visi -->
            <div style="background:#0f172a; border:1px solid #1e293b; border-radius:1.5rem; padding:2.5rem; position:relative; overflow:hidden;">
                <div class="pill pill-amber" style="display:inline-flex; margin-bottom:1.25rem;">Visi Unggulan</div>
                <h3 style="font-size:1.25rem; font-weight:900; color:#f8fafc; line-height:1.5; letter-spacing:-0.02em;">
                    "Menghasilkan Tamatan Yang Berkarakter, Unggul, Berwawasan Lingkungan, dan Berdaya Saing Global."
                </h3>
                <p style="color:#64748b; font-size:0.875rem; line-height:1.7; margin-top:1rem;">Visi ini menjiwai setiap langkah pengembangan kurikulum, fasilitas, dan pola pembinaan siswa SMKN 2 Yogyakarta.</p>
            </div>

            <!-- Misi -->
            <div style="background:#fff; border:1px solid #e2e8f0; border-radius:1.5rem; padding:2.5rem;">
                <div style="display:inline-flex; align-items:center; gap:0.5rem; padding:0.375rem 1rem; border-radius:9999px; background:#0f172a; color:#f8fafc; font-size:0.75rem; font-weight:700; letter-spacing:0.05em; text-transform:uppercase; margin-bottom:1.25rem;">10 Misi Strategis</div>
                <ol style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.875rem;">
                    @php $misi = [
                        'Mengembangkan kurikulum pembelajaran berbasis Teaching Factory (TEFA).',
                        'Mengembangkan budaya literasi numerik, digital, finansial, sains, dan bahasa.',
                        'Mengembangkan kompetensi peserta didik sesuai dengan bakat dan minat.',
                        'Menyelenggarakan pembelajaran dan manajemen sekolah berbasis TIK.',
                        'Meningkatkan fasilitas dan lingkungan belajar yang aman, nyaman, dan responsif gender.',
                        'Menerapkan Perilaku Ramah Lingkungan Hidup (PRLH) menuju sekolah adiwiyata nasional.',
                        'Mendampingi peserta didik dalam pembiasaan beribadah untuk meningkatkan ketaqwaan.',
                        'Menerapkan pendidikan berbasis Budaya Yogyakarta dan Profil Pelajar Pancasila.',
                        'Membangun kemitraan (Link and Match) dengan lembaga relevan dalam dan luar negeri.',
                        'Menyelenggarakan sertifikasi kompetensi dan bahasa asing bagi peserta didik.',
                    ]; @endphp
                    @foreach($misi as $i=>$m)
                    <li style="display:flex; align-items:flex-start; gap:0.75rem; font-size:0.875rem; color:#475569; line-height:1.6;">
                        <span style="width:1.375rem; height:1.375rem; border-radius:9999px; background:rgba(245,158,11,0.15); color:#f59e0b; font-size:0.625rem; font-weight:900; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;">{{ $i+1 }}</span>
                        <span>{{ $m }}</span>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- ===== TIMELINE SEJARAH ===== -->
<section id="sejarah" style="background:#fff; padding:5rem 0; border-top:1px solid #f1f5f9;">
    <div class="container mx-auto max-w-5xl">
        <div style="text-align:center; max-width:600px; margin:0 auto 3.5rem;">
            <span class="section-label">Perjalanan Waktu</span>
            <h2 class="section-title">Sejarah Panjang Kami</h2>
        </div>

        <div style="position:relative; padding-left:2.5rem; border-left:2px solid #e2e8f0; display:flex; flex-direction:column; gap:2.5rem;">
            @php $timeline = [
                ['year'=>'1919','amber'=>true, 'title'=>'Princess Juliana School (PJS)',        'desc'=>'Didirikan sebagai Princess Juliana School (PJS) pada masa pemerintahan Hindia Belanda di Kompleks Jetis Yogyakarta.'],
                ['year'=>'1951','amber'=>false,'title'=>'Ijazah STM Pertama',                   'desc'=>'Ijazah pertama Sekolah Teknik Menengah Yogyakarta diterbitkan secara resmi setelah masa kemerdekaan RI.'],
                ['year'=>'1952','amber'=>false,'title'=>'Pemisahan STM I & STM II',             'desc'=>'Dipecah menjadi STM Negeri I (Bangunan & Kimia) dan STM Negeri II (Listrik & Mesin).'],
                ['year'=>'1975','amber'=>false,'title'=>'Penggabungan STM Yogyakarta I',        'desc'=>'Seluruh STM di kompleks Jetis digabung kembali menjadi STM Yogyakarta I.'],
                ['year'=>'1997','amber'=>true, 'title'=>'Perubahan Nama SMKN 2 Yogyakarta',    'desc'=>'Secara resmi berganti nama menjadi SMK Negeri 2 Yogyakarta berdasarkan Nomenklatur Nasional Kemdikbud.'],
                ['year'=>'2007','amber'=>false,'title'=>'Penetapan Cagar Budaya',               'desc'=>'Gedung ditetapkan sebagai Cagar Budaya Warisan Nasional oleh Menteri Kebudayaan dan Pariwisata RI.'],
                ['year'=>'2008','amber'=>false,'title'=>'Sertifikat ISO 9001:2000',             'desc'=>'Meraih Sertifikat ISO 9001:2000 dari lembaga sertifikasi internasional TÜV Rheinland Jerman.'],
                ['year'=>'2015','amber'=>true, 'title'=>'Sekolah Pusat Keunggulan Kemdikbud',  'desc'=>'Menjadi Sekolah Rujukan Nasional dan SMK Pusat Keunggulan (Center of Excellence) Kemdikbudristek RI.'],
            ]; @endphp
            @foreach($timeline as $t)
            <div style="position:relative;">
                <div style="position:absolute; left:-2.95rem; top:0.35rem; width:0.875rem; height:0.875rem; border-radius:9999px; background:{{ $t['amber'] ? '#f59e0b' : '#cbd5e1' }}; border:3px solid #fff; box-shadow:{{ $t['amber'] ? '0 0 0 3px rgba(245,158,11,0.25)' : 'none' }};"></div>
                <div style="font-size:0.8125rem; font-weight:800; color:{{ $t['amber'] ? '#f59e0b' : '#94a3b8' }}; margin-bottom:0.375rem;">{{ $t['year'] }}</div>
                <h4 style="font-size:1.0625rem; font-weight:800; color:#0f172a; letter-spacing:-0.01em; margin-bottom:0.375rem;">{{ $t['title'] }}</h4>
                <p style="font-size:0.875rem; color:#64748b; line-height:1.65;">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== BOTTOM CTA ===== -->
<section style="background:#020617; padding:5rem 0; border-top:1px solid #0f172a; text-align:center;">
    <div class="container mx-auto max-w-4xl">
        <div class="pill pill-amber" style="display:inline-flex; margin-bottom:1.5rem;">Kini</div>
        <p style="font-size:0.875rem; color:#64748b; margin-bottom:0.5rem;">9 Program Keahlian, 100+ mitra industri, lulusan tersebar di seluruh Indonesia</p>
        <h2 style="font-size:clamp(1.75rem,4vw,3rem); font-weight:900; color:#f8fafc; letter-spacing:-0.03em; margin-bottom:1.25rem; line-height:1.15;">Lebih dari 105 Tahun Mencetak Profesional</h2>
        <p style="color:#64748b; font-size:1rem; max-width:500px; margin:0 auto 2.5rem; line-height:1.7;">Bergabunglah dengan sejarah panjang SMKN 2 Yogyakarta dan wujudkan cita-cita masa depanmu bersama kami.</p>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:1rem;">
            <a href="/ppdb"      class="btn-primary">Daftar Siswa Baru</a>
            <a href="/jurusan/1" class="btn-ghost">Lihat Program Keahlian</a>
        </div>
    </div>
</section>

</x-layout>
