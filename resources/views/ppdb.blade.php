<x-layout>
<x-slot name="title">Informasi PPDB 2026 - SMKN 2 Yogyakarta</x-slot>

<!-- ===== PPDB HERO ===== -->
<section style="background:#020617; padding:7rem 0 5rem; position:relative; overflow:hidden; text-align:center;">
    <div style="position:absolute; inset:0; background-image:radial-gradient(rgba(245,158,11,0.06) 1px, transparent 1px); background-size:24px 24px;"></div>
    <div class="container mx-auto max-w-5xl" style="position:relative; z-index:1;">
        <div class="pill pill-amber" style="display:inline-flex; margin-bottom:1.5rem;">📢 Pendaftaran Siswa Baru TA 2026/2027</div>
        <h1 style="font-size:clamp(2.25rem,6vw,4rem); font-weight:900; color:#f8fafc; letter-spacing:-0.04em; line-height:1.1; margin-bottom:1.25rem;">
            Penerimaan Peserta <br><span class="text-gradient-amber">Didik Baru 2026</span>
        </h1>
        <p style="font-size:1.0625rem; color:#94a3b8; max-width:540px; margin:0 auto 2.5rem; line-height:1.75;">
            Selamat datang di portal resmi informasi PPDB SMK Negeri 2 Yogyakarta. Siapkan berkas dan pilih program keahlian impianmu.
        </p>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:1rem;">
            <a href="https://ppdb.jogjaprov.go.id" target="_blank" class="btn-primary">Daftar via Portal PPDB DIY ↗</a>
            <a href="#alur" class="btn-ghost">Lihat Alur Pendaftaran</a>
        </div>
    </div>
</section>

<!-- ===== 5-STEP ALUR ===== -->
<section id="alur" style="background:#f8fafc; padding:5rem 0; border-top:1px solid #e2e8f0;">
    <div class="container mx-auto max-w-7xl">
        <div style="text-align:center; max-width:600px; margin:0 auto 3.5rem;">
            <span class="section-label">Langkah Pendaftaran</span>
            <h2 class="section-title">Alur Pendaftaran PPDB</h2>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(180px,1fr)); gap:1.25rem;">
            @php
            $steps = [
                ['no'=>'01','amber'=>true, 'title'=>'Pengajuan Akun',    'desc'=>'Daftarkan diri di situs resmi PPDB DIY untuk mendapatkan token akses.'],
                ['no'=>'02','amber'=>false,'title'=>'Aktivasi PIN',       'desc'=>'Aktivasi akun menggunakan nomor peserta dan kode token yang didapatkan.'],
                ['no'=>'03','amber'=>false,'title'=>'Pilih Sekolah',      'desc'=>'Pilih SMKN 2 Yogyakarta dan tentukan urutan program keahlian pilihan.'],
                ['no'=>'04','amber'=>false,'title'=>'Seleksi Real-Time',  'desc'=>'Pantau posisi jurnal seleksi secara berkala hingga pengumuman final.'],
                ['no'=>'05','amber'=>true, 'title'=>'Daftar Ulang',       'desc'=>'Verifikasi berkas dan daftar ulang fisik di kampus SMKN 2 Yogya.'],
            ];
            @endphp
            @foreach($steps as $s)
            <div class="card-white" style="text-align:center;">
                <div class="step-badge {{ $s['amber'] ? 'step-badge-amber' : 'step-badge-dark' }}" style="margin:0 auto 1rem;">{{ $s['no'] }}</div>
                <h4 style="font-size:1rem; font-weight:800; color:#0f172a; margin-bottom:0.5rem;">{{ $s['title'] }}</h4>
                <p style="font-size:0.8125rem; color:#64748b; line-height:1.65;">{{ $s['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== 3-COLUMN PERSYARATAN ===== -->
<section style="background:#fff; padding:5rem 0; border-top:1px solid #f1f5f9;">
    <div class="container mx-auto max-w-7xl">
        <div style="text-align:center; max-width:600px; margin:0 auto 3.5rem;">
            <span class="section-label">Dokumen & Ketentuan</span>
            <h2 class="section-title">Syarat Pendaftaran</h2>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(280px,1fr)); gap:1.5rem;">
            @php
            $syarat = [
                ['icon'=>'📋','color'=>'#2563eb','bg'=>'#eff6ff','title'=>'Syarat Umum','items'=>['Lulus SMP / MTs / Sederajat.','Berusia maksimal 21 tahun per 1 Juli 2026.','Memiliki Ijazah atau Surat Keterangan Lulus (SKL).','Terdaftar aktif dalam basis data Dapodik Kemdikbud.']],
                ['icon'=>'🏥','color'=>'#dc2626','bg'=>'#fef2f2','title'=>'Syarat Kesehatan','items'=>['Sehat jasmani dan rohani.','Tidak buta warna (parsial/total) untuk jurusan teknik.','Memenuhi standar tinggi badan minimum.','Lolos tes asesmen fisik & wawancara jurusan.']],
                ['icon'=>'📁','color'=>'#059669','bg'=>'#f0fdf4','title'=>'Berkas Utama','items'=>['Fotocopy Ijazah / SKL legalisir (2 lembar).','Fotocopy Kartu Keluarga (KK) & Akta Kelahiran.','Pasfoto berwarna terbaru ukuran 3x4 (4 lembar).','Surat Keterangan Sehat & Bebas Buta Warna dari Dokter.']],
            ];
            @endphp
            @foreach($syarat as $s)
            <div class="card-white">
                <div style="width:3rem; height:3rem; border-radius:0.875rem; background:{{ $s['bg'] }}; color:{{ $s['color'] }}; font-size:1.5rem; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">{{ $s['icon'] }}</div>
                <h3 style="font-size:1.0625rem; font-weight:800; color:#0f172a; margin-bottom:1rem; letter-spacing:-0.01em;">{{ $s['title'] }}</h3>
                <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.625rem;">
                    @foreach($s['items'] as $item)
                    <li style="font-size:0.875rem; color:#475569; line-height:1.6; display:flex; align-items:flex-start; gap:0.5rem;">
                        <span style="color:{{ $s['color'] }}; font-weight:900; flex-shrink:0; margin-top:1px;">•</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== KUIS PENJURUSAN BANNER ===== -->
<section style="background:linear-gradient(135deg,#1e3a5f,#0f172a,#020617); padding:5rem 0; border-top:1px solid #0f172a; text-align:center;">
    <div class="container mx-auto max-w-4xl">
        <h2 style="font-size:clamp(1.75rem,4vw,2.75rem); font-weight:900; color:#f8fafc; letter-spacing:-0.03em; margin-bottom:1rem; line-height:1.2;">Bingung Pilih Jurusan?</h2>
        <p style="color:#94a3b8; font-size:1rem; max-width:480px; margin:0 auto 2.5rem; line-height:1.7;">Ikuti simulasi kuis minat dan bakat kami untuk menemukan program keahlian yang paling cocok dengan passion kamu!</p>
        <a href="/jurusan/1" class="btn-primary">Mulai Kuis Penjurusan →</a>
    </div>
</section>

</x-layout>
