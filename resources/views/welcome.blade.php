<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XGROW STUDIO | Here We Are. Here We Grow.</title>
    <meta name="description" content="XGROW STUDIO — Solusi digital untuk UMKM lokal. Web Dev, Mobile App, UI/UX Design, Digital Product.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Bebas Neue', 'sans-serif'],
                        body: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        navy:   '#06023A',
                        primary:'#241C86',
                        muted:  '#8B88A2',
                        light:  '#D9D9D9',
                        dark:   '#1E1E1E',
                    },
                    letterSpacing: {
                        widest2: '0.2em',
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Poppins', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Bebas Neue', sans-serif; }

        /* Glowing orb bg effects */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            pointer-events: none;
        }

        /* Grid texture overlay */
        .grid-bg {
            background-image: linear-gradient(rgba(36,28,134,0.15) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(36,28,134,0.15) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #06023A; }
        ::-webkit-scrollbar-thumb { background: #241C86; border-radius: 3px; }

        /* Tech badge hover */
        .tech-badge:hover { transform: translateY(-4px); }

        /* Card glow on hover */
        .service-card:hover { box-shadow: 0 0 40px rgba(36,28,134,0.4); }

        /* Team card */
        .team-card:hover { transform: translateY(-6px); }
    </style>
</head>
<body class="bg-navy text-white antialiased" x-data="{ mobileMenuOpen: false, activeSection: 'beranda' }">

    {{-- ===== NAVBAR ===== --}}
    <header class="fixed w-full z-50 transition-all duration-300"
            x-data="{ scrolled: false }"
            @scroll.window="scrolled = window.scrollY > 50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20"
                 :class="scrolled ? 'bg-navy/95 backdrop-blur-md shadow-lg shadow-primary/20 rounded-b-2xl' : ''">

                {{-- Logo --}}
                <a href="#beranda" class="flex items-center gap-2 group">
                    <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center group-hover:bg-primary/80 transition">
                        <span class="text-white font-heading text-lg leading-none">X</span>
                    </div>
                    <span class="font-heading text-2xl tracking-widest text-white">XGROW <span class="text-primary">STUDIO</span></span>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden lg:flex items-center gap-8">
                    <a href="#beranda" class="text-sm font-medium text-muted hover:text-white transition-colors">Beranda</a>
                    <a href="#layanan" class="text-sm font-medium text-muted hover:text-white transition-colors">Layanan</a>
                    <a href="#karya" class="text-sm font-medium text-muted hover:text-white transition-colors">Karya Kami</a>
                    <a href="#tech" class="text-sm font-medium text-muted hover:text-white transition-colors">Tech Stack</a>
                    <a href="#tentang" class="text-sm font-medium text-muted hover:text-white transition-colors">Tentang</a>
                    <a href="#tim" class="text-sm font-medium text-muted hover:text-white transition-colors">Tim</a>
                </div>

                <div class="hidden lg:flex items-center gap-3">
                    <a href="#kontak" class="px-5 py-2.5 rounded-lg border border-primary text-sm font-semibold text-white hover:bg-primary/20 transition-colors">
                        Hubungi Kami
                    </a>
                    <a href="#kontak" class="px-5 py-2.5 rounded-lg bg-primary text-sm font-semibold text-white hover:bg-primary/80 transition-colors shadow-lg shadow-primary/30">
                        Mulai Proyek
                    </a>
                </div>

                {{-- Mobile toggle --}}
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 text-muted hover:text-white">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-cloak x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Mobile menu --}}
            <div x-cloak x-show="mobileMenuOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="lg:hidden bg-navy/95 backdrop-blur-md border border-primary/20 rounded-2xl mt-2 p-6 shadow-xl">
                <div class="flex flex-col gap-4">
                    <a href="#beranda"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Beranda</a>
                    <a href="#layanan"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Layanan</a>
                    <a href="#karya"    @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Karya Kami</a>
                    <a href="#tech"     @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Tech Stack</a>
                    <a href="#tentang"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Tentang</a>
                    <a href="#tim"      @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-white transition">Tim</a>
                    <a href="#kontak"   @click="mobileMenuOpen=false" class="mt-2 w-full text-center py-3 bg-primary rounded-lg text-white font-semibold hover:bg-primary/80 transition">Mulai Proyek</a>
                </div>
            </div>
        </nav>
    </header>

    {{-- ===== HERO ===== --}}
    <section id="beranda" class="relative min-h-screen flex items-center pt-20 overflow-hidden grid-bg">
        {{-- Orbs --}}
        <div class="orb w-96 h-96 bg-primary top-10 -left-32"></div>
        <div class="orb w-64 h-64 bg-primary bottom-20 right-10"></div>
        <div class="orb w-48 h-48 bg-blue-400 top-1/2 right-1/4"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="max-w-4xl">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/20 border border-primary/40 mb-8">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-xs font-medium text-light tracking-widest uppercase">Digital Agency untuk UMKM Lokal</span>
                </div>

                {{-- Headline --}}
                <h1 class="font-heading text-6xl sm:text-7xl lg:text-9xl leading-none tracking-wider text-white mb-6">
                    HERE WE ARE.<br>
                    <span class="text-primary">HERE WE GROW.</span>
                </h1>

                <p class="text-base sm:text-lg text-muted max-w-2xl mb-10 leading-relaxed">
                    XGROW STUDIO hadir sebagai mitra pertumbuhan digital UMKM lokal. Kami bantu bisnismu tumbuh lewat solusi web, mobile app, dan desain produk yang tepat sasaran.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#kontak" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary rounded-xl font-semibold text-white hover:bg-primary/80 transition-all shadow-xl shadow-primary/30">
                        Konsultasi Gratis
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="#karya" class="inline-flex items-center justify-center gap-2 px-8 py-4 border border-light/30 rounded-xl font-semibold text-light hover:border-white hover:text-white transition-all">
                        Lihat Karya Kami
                    </a>
                </div>

                {{-- Stats --}}
                <div class="mt-16 pt-10 border-t border-white/10 grid grid-cols-2 sm:grid-cols-3 gap-8 max-w-lg">
                    <div>
                        <p class="font-heading text-4xl text-primary">20+</p>
                        <p class="text-xs text-muted mt-1">Proyek Selesai</p>
                    </div>
                    <div>
                        <p class="font-heading text-4xl text-primary">15+</p>
                        <p class="text-xs text-muted mt-1">Klien Puas</p>
                    </div>
                    <div>
                        <p class="font-heading text-4xl text-primary">4</p>
                        <p class="text-xs text-muted mt-1">Tim Profesional</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-muted animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </div>
    </section>

    {{-- ===== SERVICES ===== --}}
    <section id="layanan" class="py-24 bg-dark relative overflow-hidden">
        <div class="orb w-80 h-80 bg-primary top-0 right-0 opacity-20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-3">Apa yang Kami Tawarkan</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-white">LAYANAN KAMI</h2>
                <p class="mt-4 text-muted max-w-xl mx-auto text-sm leading-relaxed">
                    Dari ide hingga produk digital yang siap pakai — kami hadir di setiap tahap perjalanan bisnismu.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Web Dev --}}
                <div class="service-card group bg-navy border border-primary/20 rounded-2xl p-8 transition-all duration-300 cursor-default hover:border-primary/60">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-white mb-3 tracking-wider">WEB DEVELOPMENT</h3>
                    <p class="text-muted text-sm leading-relaxed">Website & web app responsif menggunakan Laravel + React dengan performa tinggi dan keamanan solid.</p>
                    <div class="mt-6 pt-4 border-t border-white/5 flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">Laravel</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">React</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">Tailwind</span>
                    </div>
                </div>

                {{-- Mobile App --}}
                <div class="service-card group bg-navy border border-primary/20 rounded-2xl p-8 transition-all duration-300 cursor-default hover:border-primary/60">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-white mb-3 tracking-wider">MOBILE APP</h3>
                    <p class="text-muted text-sm leading-relaxed">Aplikasi iOS & Android cross-platform dengan React Native / Expo yang cepat dan ringan di semua perangkat.</p>
                    <div class="mt-6 pt-4 border-t border-white/5 flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">React Native</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">Expo</span>
                    </div>
                </div>

                {{-- UI/UX Design --}}
                <div class="service-card group bg-navy border border-primary/20 rounded-2xl p-8 transition-all duration-300 cursor-default hover:border-primary/60">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-white mb-3 tracking-wider">UI/UX DESIGN</h3>
                    <p class="text-muted text-sm leading-relaxed">Desain antarmuka yang intuitif dan memukau — dari wireframe hingga high-fidelity prototype di Figma.</p>
                    <div class="mt-6 pt-4 border-t border-white/5 flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">Figma</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/20 text-primary">Prototyping</span>
                    </div>
                </div>

                {{-- Digital Product --}}
                <div class="service-card group bg-primary border border-primary rounded-2xl p-8 transition-all duration-300 cursor-default">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-white mb-3 tracking-wider">DIGITAL PRODUCT</h3>
                    <p class="text-white/80 text-sm leading-relaxed">Pengembangan produk digital end-to-end — dari konsep, MVP, hingga produk siap pasar yang scalable.</p>
                    <div class="mt-6 pt-4 border-t border-white/20 flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white">MVP</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white">SaaS</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white">API</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== OUR WORK ===== --}}
    <section id="karya" class="py-24 bg-navy relative overflow-hidden">
        <div class="orb w-96 h-96 bg-primary bottom-0 left-0 opacity-10"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-3">Hasil Kerja Kami</p>
                    <h2 class="font-heading text-5xl lg:text-7xl text-white">OUR WORK</h2>
                </div>
                <a href="#kontak" class="mt-6 md:mt-0 inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors">
                    Diskusikan Proyekmu
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Project 1 --}}
                <div class="group relative rounded-2xl overflow-hidden border border-primary/20 hover:border-primary/60 transition-all duration-500 cursor-pointer">
                    <div class="aspect-video bg-gradient-to-br from-primary to-navy flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <p class="text-white/60 text-sm">Dashboard Preview</p>
                        </div>
                    </div>
                    <div class="p-6 bg-dark">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs px-3 py-1 rounded-full bg-primary/30 text-primary font-medium">Sistem Informasi</span>
                        </div>
                        <h3 class="font-heading text-2xl text-white tracking-wider mb-2">DASHBOARD ORGANISASI</h3>
                        <p class="text-muted text-sm">Platform manajemen data anggota terpusat dengan role-based access dan reporting otomatis.</p>
                    </div>
                </div>

                {{-- Project 2 --}}
                <div class="group relative rounded-2xl overflow-hidden border border-primary/20 hover:border-primary/60 transition-all duration-500 cursor-pointer">
                    <div class="aspect-video bg-gradient-to-br from-navy to-primary/60 flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                            </div>
                            <p class="text-white/60 text-sm">E-Commerce Preview</p>
                        </div>
                    </div>
                    <div class="p-6 bg-dark">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs px-3 py-1 rounded-full bg-primary/30 text-primary font-medium">E-Commerce</span>
                        </div>
                        <h3 class="font-heading text-2xl text-white tracking-wider mb-2">PLATFORM MULTI-VENDOR</h3>
                        <p class="text-muted text-sm">Marketplace lokal dengan sistem rekomendasi, payment gateway, dan panel seller yang intuitif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== TECH STACK ===== --}}
    <section id="tech" class="py-24 bg-dark relative overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-3">Teknologi yang Kami Gunakan</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-white">TECH STACK</h2>
                <p class="mt-4 text-muted max-w-md mx-auto text-sm leading-relaxed">
                    Stack modern & teruji untuk membangun produk digital yang solid dan scalable.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @php
                $techs = [
                    ['label' => 'Laravel',        'bg' => 'from-red-900/40 to-red-800/20',    'icon' => 'L'],
                    ['label' => 'React',          'bg' => 'from-cyan-900/40 to-cyan-800/20',  'icon' => 'R'],
                    ['label' => 'React Native',   'bg' => 'from-blue-900/40 to-blue-800/20',  'icon' => 'RN'],
                    ['label' => 'Tailwind CSS',   'bg' => 'from-teal-900/40 to-teal-800/20',  'icon' => 'TW'],
                    ['label' => 'Figma',          'bg' => 'from-purple-900/40 to-purple-800/20','icon' => 'F'],
                    ['label' => 'MySQL',          'bg' => 'from-orange-900/40 to-orange-800/20','icon' => 'DB'],
                    ['label' => 'PHP',            'bg' => 'from-indigo-900/40 to-indigo-800/20','icon' => 'PHP'],
                    ['label' => 'JavaScript',     'bg' => 'from-yellow-900/40 to-yellow-800/20','icon' => 'JS'],
                    ['label' => 'Expo',           'bg' => 'from-gray-700/40 to-gray-600/20',  'icon' => 'EX'],
                    ['label' => 'Git',            'bg' => 'from-red-900/40 to-red-700/20',    'icon' => 'G'],
                    ['label' => 'REST API',       'bg' => 'from-green-900/40 to-green-800/20','icon' => 'API'],
                    ['label' => 'Node.js',        'bg' => 'from-lime-900/40 to-lime-800/20',  'icon' => 'N'],
                ];
                @endphp

                @foreach($techs as $tech)
                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-gradient-to-b {{ $tech['bg'] }} border border-white/5 hover:border-primary/40 transition-all duration-300 cursor-default">
                    <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center">
                        <span class="text-white font-heading text-xs tracking-wider">{{ $tech['icon'] }}</span>
                    </div>
                    <span class="text-xs text-muted group-hover:text-white transition-colors text-center">{{ $tech['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== ABOUT ===== --}}
    <section id="tentang" class="py-24 bg-navy relative overflow-hidden">
        <div class="orb w-80 h-80 bg-primary top-1/2 right-0 opacity-15"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Visual --}}
                <div class="relative">
                    <div class="aspect-square max-w-md mx-auto rounded-3xl overflow-hidden border border-primary/20">
                        <img src="{{ asset('Foto/kokoh.png') }}" alt="Tim XGROW STUDIO" class="object-cover w-full h-full">
                    </div>
                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -right-4 md:right-4 bg-primary rounded-2xl p-5 shadow-2xl shadow-primary/40">
                        <p class="font-heading text-3xl text-white">HERE WE</p>
                        <p class="font-heading text-3xl text-white/60">GROW.</p>
                    </div>
                </div>

                {{-- Text --}}
                <div>
                    <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-3">Tentang Kami</p>
                    <h2 class="font-heading text-5xl lg:text-6xl text-white leading-tight mb-6">
                        SOLUSI NYATA<br>UNTUK UMKM<br>LOKAL
                    </h2>
                    <p class="text-muted leading-relaxed mb-6 text-sm">
                        XGROW STUDIO lahir dari keinginan untuk membantu bisnis lokal tumbuh lewat teknologi. Kami bukan hanya vendor — kami adalah mitra pertumbuhan yang memahami tantangan nyata UMKM Indonesia.
                    </p>
                    <p class="text-muted leading-relaxed mb-8 text-sm">
                        Dengan pendekatan yang <span class="text-white font-medium">fresh, energetic, dan bold</span>, kami menghadirkan solusi digital yang tidak hanya bagus secara visual, tapi juga memberi dampak nyata bagi bisnis.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div class="border border-primary/30 rounded-xl p-4 text-center">
                            <p class="font-heading text-3xl text-primary">Growth</p>
                            <p class="text-xs text-muted mt-1">Nilai Utama</p>
                        </div>
                        <div class="border border-primary/30 rounded-xl p-4 text-center">
                            <p class="font-heading text-3xl text-primary">Solution</p>
                            <p class="text-xs text-muted mt-1">Pendekatan</p>
                        </div>
                        <div class="border border-primary/30 rounded-xl p-4 text-center">
                            <p class="font-heading text-3xl text-primary">Transform</p>
                            <p class="text-xs text-muted mt-1">Dampak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== OUR TEAM ===== --}}
    <section id="tim" class="py-24 bg-dark relative overflow-hidden">
        <div class="orb w-64 h-64 bg-primary top-0 left-1/2 opacity-20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-3">Orang-orang di Balik Karya</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-white">OUR TEAM</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $team = [
                    [
                        'name'  => 'Ari',
                        'role'  => 'Founder & Lead Developer',
                        'desc'  => 'Arsitek utama di balik setiap sistem yang kami bangun. Obsesi pada clean code dan UX yang intuitif.',
                        'color' => 'from-primary to-blue-800',
                        'initial'=> 'A',
                    ],
                    [
                        'name'  => 'Prabu',
                        'role'  => 'Co-Founder & Developer',
                        'desc'  => 'Full-stack developer dengan kemampuan problem solving tinggi. Menjembatani ide dan implementasi teknis.',
                        'color' => 'from-purple-800 to-primary',
                        'initial'=> 'P',
                    ],
                    [
                        'name'  => 'Wiam',
                        'role'  => 'Backend Developer',
                        'desc'  => 'Spesialis backend & database. Memastikan sistem berjalan cepat, aman, dan efisien di balik layar.',
                        'color' => 'from-blue-900 to-indigo-800',
                        'initial'=> 'W',
                    ],
                    [
                        'name'  => 'Dimas',
                        'role'  => 'Quality Assurance',
                        'desc'  => 'Mata tajam untuk setiap bug dan celah. Memastikan produk yang rilis sudah melewati standar kualitas tertinggi.',
                        'color' => 'from-indigo-800 to-primary',
                        'initial'=> 'D',
                    ],
                ];
                @endphp

                @foreach($team as $member)
                <div class="team-card group bg-navy border border-primary/20 rounded-2xl overflow-hidden transition-all duration-300 hover:border-primary/50">
                    <div class="aspect-square bg-gradient-to-br {{ $member['color'] }} flex items-center justify-center relative overflow-hidden">
                        <span class="font-heading text-8xl text-white/20 select-none">{{ $member['initial'] }}</span>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="font-heading text-5xl text-white">{{ $member['initial'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-white tracking-wider">{{ $member['name'] }}</h3>
                        <p class="text-primary text-xs font-semibold mt-1 mb-3">{{ $member['role'] }}</p>
                        <p class="text-muted text-xs leading-relaxed">{{ $member['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CTA ===== --}}
    <section id="kontak" class="py-24 bg-navy relative overflow-hidden">
        <div class="orb w-96 h-96 bg-primary top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-20"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-xs font-semibold text-primary uppercase tracking-widest2 mb-4">Siap Bertumbuh Bersama?</p>
            <h2 class="font-heading text-5xl sm:text-7xl lg:text-8xl text-white leading-tight mb-6">
                MULAI PROYEK<br><span class="text-primary">HARI INI</span>
            </h2>
            <p class="text-muted max-w-xl mx-auto mb-10 text-sm leading-relaxed">
                Ceritakan idemu dan tim XGROW STUDIO siap merumuskan solusi terbaik. Konsultasi pertama gratis, tanpa syarat.
            </p>

            {{-- Contact form --}}
            <div class="bg-dark border border-primary/20 rounded-3xl p-8 md:p-12 text-left">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-muted uppercase tracking-widest mb-2">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="John Doe"
                                   class="w-full bg-navy border border-primary/20 rounded-xl px-4 py-3 text-sm text-white placeholder-muted focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-muted uppercase tracking-widest mb-2">Email</label>
                            <input type="email" name="email" placeholder="john@example.com"
                                   class="w-full bg-navy border border-primary/20 rounded-xl px-4 py-3 text-sm text-white placeholder-muted focus:outline-none focus:border-primary transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-muted uppercase tracking-widest mb-2">Layanan yang Dibutuhkan</label>
                        <select name="service"
                                class="w-full bg-navy border border-primary/20 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-primary transition-colors appearance-none">
                            <option value="">Pilih Layanan...</option>
                            <option>Web Development</option>
                            <option>Mobile App Development</option>
                            <option>UI/UX Design</option>
                            <option>Digital Product</option>
                            <option>Konsultasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-muted uppercase tracking-widest mb-2">Detail Proyek</label>
                        <textarea name="message" rows="4" placeholder="Ceritakan ide atau kebutuhan proyekmu..."
                                  class="w-full bg-navy border border-primary/20 rounded-xl px-4 py-3 text-sm text-white placeholder-muted focus:outline-none focus:border-primary transition-colors resize-none"></textarea>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <button type="submit"
                                class="w-full sm:w-auto px-10 py-4 bg-primary rounded-xl font-semibold text-white hover:bg-primary/80 transition-all shadow-xl shadow-primary/30 text-sm">
                            Kirim Pesan
                        </button>
                        <div class="flex items-center gap-3 text-muted text-xs">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Respon dalam 1x24 jam
                        </div>
                    </div>
                </form>

                {{-- Contact info --}}
                <div class="mt-8 pt-8 border-t border-white/5 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                    <div>
                        <p class="text-xs text-muted mb-1">Email</p>
                        <p class="text-sm text-white">hello@xgrowstudio.com</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted mb-1">WhatsApp</p>
                        <p class="text-sm text-white">+62 812-XXXX-XXXX</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted mb-1">Lokasi</p>
                        <p class="text-sm text-white">Subang, Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-dark border-t border-primary/20 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <a href="#beranda" class="flex items-center gap-2">
                    <div class="w-7 h-7 bg-primary rounded-lg flex items-center justify-center">
                        <span class="text-white font-heading text-base leading-none">X</span>
                    </div>
                    <span class="font-heading text-xl tracking-widest text-white">XGROW <span class="text-primary">STUDIO</span></span>
                </a>

                <p class="text-xs text-muted italic">"Here We Are. Here We Grow."</p>

                <div class="flex items-center gap-6 text-xs text-muted">
                    <a href="#layanan" class="hover:text-white transition-colors">Layanan</a>
                    <a href="#karya"   class="hover:text-white transition-colors">Karya</a>
                    <a href="#tim"     class="hover:text-white transition-colors">Tim</a>
                    <a href="#kontak"  class="hover:text-white transition-colors">Kontak</a>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-white/5 text-center text-xs text-muted">
                &copy; 2026 XGROW STUDIO. All rights reserved. &nbsp;·&nbsp; Subang, Jawa Barat, Indonesia
            </div>
        </div>
    </footer>

</body>
</html>
