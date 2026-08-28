@php
    $beritaList = [
        1 => [
            'judul' => 'Tim Adiwiyata SMKN 2 Yogya Gelar Aksi Bersih Sungai Peringati Hari Lingkungan Hidup',
            'tanggal' => '10 Juni 2025',
            'kategori' => 'Lingkungan',
            'isi' => 'Sebagai sekolah berwawasan lingkungan, tim Adiwiyata SMKN 2 turun langsung membersihkan sungai dan lingkungan sekolah bersama ratusan siswa dan guru. Kegiatan ini merupakan bentuk nyata komitmen SMKN 2 Yogyakarta dalam menjaga kelestarian lingkungan hidup. Ratusan siswa dari berbagai program keahlian bersatu untuk membersihkan Sungai Code yang mengalir di dekat area sekolah. Selain membersihkan sampah di bantaran sungai, tim juga melakukan penanaman pohon dan sosialisasi pengurangan penggunaan plastik kepada masyarakat sekitar.'
        ],
        2 => [
            'judul' => 'SMKN 2 Yogyakarta Raih 4 Medali di Mitsubishi Technical Skill Contest 2025',
            'tanggal' => '25 Mei 2025',
            'kategori' => 'Prestasi',
            'isi' => 'Membuktikan kualitas standar industri, siswa jurusan TKRO berhasil mendominasi kompetisi otomotif nasional yang diadakan langsung oleh Mitsubishi Motors Indonesia. Tim SMKN 2 Yogyakarta berhasil membawa pulang 2 medali emas, 1 medali perak, dan 1 medali perunggu dalam ajang bergengsi Mitsubishi Technical Skill Contest 2025. Kompetisi ini diikuti oleh lebih dari 200 peserta dari seluruh SMK mitra Mitsubishi di Indonesia. Para siswa diuji kemampuannya dalam diagnosa kerusakan, servis mesin, dan pemahaman teknologi kendaraan terbaru.'
        ],
        3 => [
            'judul' => 'Siswa SMKN 2 Yogyakarta Raih Medali Emas FIKSI 2024 di Jakarta',
            'tanggal' => '12 April 2025',
            'kategori' => 'Inovasi',
            'isi' => 'Karya inovasi teknologi dari tim SIJA sukses meraih medali emas di Festival Inovasi dan Kewirausahaan Siswa Indonesia tingkat nasional. Tim yang beranggotakan 3 siswa program keahlian Sistem Informatika, Jaringan dan Aplikasi (SIJA) mengembangkan sistem monitoring kualitas udara berbasis IoT yang dapat diakses secara real-time melalui aplikasi mobile. Karya inovatif ini berhasil mengalahkan ratusan tim dari seluruh Indonesia dan mendapatkan pengakuan langsung dari Kementerian Pendidikan dan Kebudayaan RI.'
        ],
    ];

    $currentId = is_numeric($id) && isset($beritaList[(int)$id]) ? (int)$id : 1;
    $b = $beritaList[$currentId];
@endphp
<x-layout>
    <x-slot name="title">{{ $b['judul'] }} - SMKN 2 Yogyakarta</x-slot>

    <!-- BERITA DETAIL HERO -->
    <section class="relative bg-slate-950 text-white pt-28 pb-16 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <a href="/berita" class="inline-flex items-center gap-2 text-[#F59E0B] font-bold text-xs sm:text-sm hover:underline mb-8">
                &larr; Kembali ke Semua Berita
            </a>
            <div class="inline-block px-3.5 py-1 rounded-full bg-[#F59E0B]/20 text-[#F59E0B] font-bold text-xs uppercase tracking-wider mb-4">
                {{ $b['kategori'] }}
            </div>
            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight mb-4">
                {{ $b['judul'] }}
            </h1>
            <p class="text-slate-400 text-sm">{{ $b['tanggal'] }} &bull; SMKN 2 Yogyakarta</p>
        </div>
    </section>

    <!-- BERITA CONTENT -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm">
                <p class="text-slate-700 text-base sm:text-lg leading-relaxed mb-8">{{ $b['isi'] }}</p>

                <div class="border-t border-slate-100 pt-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <a href="/berita" class="inline-flex items-center gap-2 text-[#F59E0B] font-bold text-sm hover:underline">
                        &larr; Berita Lainnya
                    </a>
                    <a href="/ppdb" class="inline-flex items-center gap-2 px-6 py-3 bg-[#F59E0B] text-slate-950 font-black rounded-full text-sm hover:bg-amber-400 transition-all">
                        Daftar PPDB 2026 &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
