<footer style="background:#020617; color:#64748b; padding:4rem 0 2.5rem; border-top:1px solid #0f172a;">
    <div class="container mx-auto max-w-7xl">
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(200px,1fr)); gap:3rem; margin-bottom:3rem;">

            <!-- Brand -->
            <div>
                <a href="/" style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem; text-decoration:none;">
                    <div style="width:2.25rem; height:2.25rem; border-radius:0.625rem; background:#f59e0b; display:flex; align-items:center; justify-content:center; font-weight:900; color:#0f172a; font-size:1rem;">2</div>
                    <span style="font-weight:900; color:#f8fafc; font-size:1rem; letter-spacing:-0.02em; line-height:1;">SMKN 2 <span style="color:#f59e0b;">YOGYAKARTA</span></span>
                </a>
                <p style="font-size:0.8125rem; line-height:1.7; margin-bottom:1.25rem; color:#475569;">Sekolah menengah kejuruan bertaraf internasional yang menghasilkan lulusan kompeten, berkarakter, dan berjiwa wirausaha di era industri 4.0.</p>
                <div style="display:flex; gap:0.625rem;">
                    @foreach(['FB','TW','IG','YT'] as $s)
                    <a href="#" style="width:2.25rem; height:2.25rem; border-radius:9999px; border:1px solid #1e293b; background:#0f172a; display:flex; align-items:center; justify-content:center; font-size:0.625rem; font-weight:700; color:#94a3b8; text-decoration:none; transition:background-color 0.2s, color 0.2s;" onmouseover="this.style.background='#f59e0b';this.style.color='#0f172a';" onmouseout="this.style.background='#0f172a';this.style.color='#94a3b8';">{{ $s }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Tautan Cepat -->
            <div>
                <h4 style="font-size:0.75rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#f8fafc; margin-bottom:1.25rem;">Tautan Cepat</h4>
                <ul style="list-style:none; padding:0; margin:0; space-y:0.625rem; display:flex; flex-direction:column; gap:0.625rem;">
                    @foreach([['Tentang Sekolah','/tentang'],['Program Keahlian','/jurusan/1'],['Informasi PPDB','/ppdb'],['Bursa Kerja Khusus (BKK)','#'],['Prestasi Siswa','/kesiswaan']] as [$label,$href])
                    <li><a href="{{ $href }}" style="font-size:0.8125rem; color:#64748b; text-decoration:none;" onmouseover="this.style.color='#f59e0b'" onmouseout="this.style.color='#64748b'">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Portal Internal -->
            <div>
                <h4 style="font-size:0.75rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#f8fafc; margin-bottom:1.25rem;">Portal Internal</h4>
                <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.625rem;">
                    @foreach(['E-Learning','E-Rapor','Perpustakaan Digital','Sistem Informasi Manajemen','Alumni Portal'] as $p)
                    <li><a href="#" style="font-size:0.8125rem; color:#64748b; text-decoration:none;" onmouseover="this.style.color='#f59e0b'" onmouseout="this.style.color='#64748b'">{{ $p }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div>
                <h4 style="font-size:0.75rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:#f8fafc; margin-bottom:1.25rem;">Hubungi Kami</h4>
                <div style="display:flex; flex-direction:column; gap:0.875rem; font-size:0.8125rem;">
                    <div style="display:flex; align-items:flex-start; gap:0.625rem;"><span style="color:#f59e0b; flex-shrink:0;">📍</span><span>Jl. A.M. Sangaji No. 47, Cokrodiningratan, Jetis, Yogyakarta 55233</span></div>
                    <div style="display:flex; align-items:center; gap:0.625rem;"><span style="color:#f59e0b;">📞</span><span>(0274) 513454</span></div>
                    <div style="display:flex; align-items:center; gap:0.625rem;"><span style="color:#f59e0b;">✉️</span><span>info@smkn2jogja.sch.id</span></div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div style="padding-top:2rem; border-top:1px solid #0f172a; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1rem; font-size:0.75rem; color:#334155;">
            <p style="margin:0;">&copy; 2026 SMK Negeri 2 Yogyakarta. All rights reserved.</p>
            <div style="display:flex; gap:1.5rem;">
                <a href="#" style="color:#334155; text-decoration:none;" onmouseover="this.style.color='#94a3b8'" onmouseout="this.style.color='#334155'">Kebijakan Privasi</a>
                <a href="#" style="color:#334155; text-decoration:none;" onmouseover="this.style.color='#94a3b8'" onmouseout="this.style.color='#334155'">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
