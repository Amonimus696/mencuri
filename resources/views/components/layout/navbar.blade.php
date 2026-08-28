<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-slate-950/90 backdrop-blur-md border-b border-slate-800/80 shadow-lg py-3': scrolled, 'bg-slate-950/70 backdrop-blur-sm border-b border-slate-800/40 py-5': !scrolled }"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-accent flex items-center justify-center font-black text-slate-950 text-xl shadow-md group-hover:scale-105 transition-transform">
                    2
                </div>
                <div class="flex flex-col">
                    <span class="font-black text-white text-lg tracking-tight leading-none group-hover:text-accent transition-colors">
                        SMKN 2 <span class="text-accent">YOGYAKARTA</span>
                    </span>
                    <span class="text-[10px] text-slate-400 tracking-wider font-semibold uppercase">The Industrial Culture School</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center gap-1 bg-slate-900/80 backdrop-blur-md px-4 py-1.5 rounded-full border border-slate-800/80">
                <a href="/" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ Request::is('/') ? 'bg-accent text-slate-950 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Beranda
                </a>
                <a href="/profil" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ Request::is('profil') || Request::is('tentang') ? 'bg-accent text-slate-950 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Profil
                </a>
                <a href="/jurusan" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ Request::is('jurusan*') ? 'bg-accent text-slate-950 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Jurusan
                </a>
                <a href="/kesiswaan" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ Request::is('kesiswaan') ? 'bg-accent text-slate-950 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Kesiswaan
                </a>
                <a href="/ppdb" class="px-4 py-2 rounded-full text-xs font-bold transition-all {{ Request::is('ppdb') ? 'bg-accent text-slate-950 shadow-sm' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Info PPDB
                </a>
            </div>

            <!-- CTA Button & Mobile Toggle -->
            <div class="flex items-center gap-3">
                <a href="/ppdb" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-accent text-slate-950 font-black rounded-full text-xs uppercase tracking-wider hover:bg-yellow-400 transition-all shadow-md">
                    PPDB 2026
                </a>

                <!-- Mobile Hamburger Button -->
                <button @click="open = !open" type="button" class="md:hidden p-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden mt-4 py-4 px-6 bg-slate-900 border border-slate-800 rounded-3xl space-y-3 shadow-xl">
            <a href="/" class="block py-2.5 px-4 rounded-2xl text-sm font-bold {{ Request::is('/') ? 'bg-accent text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Beranda</a>
            <a href="/profil" class="block py-2.5 px-4 rounded-2xl text-sm font-bold {{ Request::is('profil') ? 'bg-accent text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Profil</a>
            <a href="/jurusan" class="block py-2.5 px-4 rounded-2xl text-sm font-bold {{ Request::is('jurusan*') ? 'bg-accent text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Jurusan</a>
            <a href="/kesiswaan" class="block py-2.5 px-4 rounded-2xl text-sm font-bold {{ Request::is('kesiswaan') ? 'bg-accent text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Kesiswaan</a>
            <a href="/ppdb" class="block py-2.5 px-4 rounded-2xl text-sm font-bold {{ Request::is('ppdb') ? 'bg-accent text-slate-950' : 'text-slate-300 hover:bg-slate-800' }}">Info PPDB</a>
        </div>
    </div>
</nav>
