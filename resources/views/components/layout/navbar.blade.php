<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 30)"
     :class="scrolled ? 'py-3 bg-[#020617]/95 shadow-lg shadow-black/30 border-b border-white/5 backdrop-blur-xl' : 'py-5 bg-[#020617]/70 backdrop-blur-md border-b border-white/5'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between max-w-7xl">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 group">
            <div class="w-9 h-9 rounded-xl bg-amber-500 flex items-center justify-center font-black text-slate-950 text-lg leading-none shadow group-hover:scale-105 transition-transform">
                2
            </div>
            <div>
                <span class="font-black text-white text-[1.05rem] tracking-tight leading-none block">SMKN 2 <span class="text-amber-500">YOGYAKARTA</span></span>
                <span class="text-[9px] text-slate-500 tracking-widest uppercase font-semibold">The Industrial Culture School</span>
            </div>
        </a>

        <!-- Desktop nav pills -->
        <div class="hidden md:flex items-center nav-pill-wrap">
            <a href="/"        class="nav-link {{ Request::is('/')        ? 'nav-link-active' : '' }}">Beranda</a>
            <a href="/tentang" class="nav-link {{ Request::is('tentang','profil') ? 'nav-link-active' : '' }}">Profil</a>
            <a href="/jurusan/1" class="nav-link {{ Request::is('jurusan*') ? 'nav-link-active' : '' }}">Jurusan</a>
            <a href="/kesiswaan" class="nav-link {{ Request::is('kesiswaan') ? 'nav-link-active' : '' }}">Kesiswaan</a>
            <a href="/berita"  class="nav-link {{ Request::is('berita*') ? 'nav-link-active' : '' }}">Berita</a>
        </div>

        <!-- CTA + hamburger -->
        <div class="flex items-center gap-3">
            <a href="/ppdb" class="hidden sm:inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full bg-amber-500 text-slate-950 font-black text-xs uppercase tracking-wider hover:bg-amber-400 transition-colors shadow shadow-amber-500/20">
                Info PPDB
            </a>
            <button @click="open=!open" class="md:hidden p-2 rounded-xl border border-white/10 text-slate-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200 origin-top"
         x-transition:enter-start="opacity-0 scale-y-95"
         x-transition:enter-end="opacity-100 scale-y-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-y-100"
         x-transition:leave-end="opacity-0 scale-y-95"
         class="md:hidden mt-3 mx-4 p-4 bg-slate-900 border border-white/8 rounded-2xl space-y-1 shadow-xl">
        <a href="/"          class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('/')          ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Beranda</a>
        <a href="/tentang"   class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('tentang','profil') ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Profil</a>
        <a href="/jurusan/1" class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('jurusan*')   ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Jurusan</a>
        <a href="/kesiswaan" class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('kesiswaan') ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Kesiswaan</a>
        <a href="/berita"    class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('berita*')    ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Berita</a>
        <a href="/ppdb"      class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ Request::is('ppdb')       ? 'bg-amber-500 text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Info PPDB</a>
    </div>
</nav>
