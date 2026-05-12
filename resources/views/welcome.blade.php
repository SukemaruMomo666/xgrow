<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XGROW STUDIO | Here We Are. Here We Grow.</title>
    <meta name="description" content="XGROW STUDIO â€” Solusi digital untuk UMKM lokal. Web Dev, Mobile App, UI/UX Design, Digital Product.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('logo-vertical-white.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Bebas Neue', 'sans-serif'],
                        body:    ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        navy:    '#06023A',
                        primary: '#241C86',
                        muted:   '#8B88A2',
                        lgray:   '#D9D9D9',
                        soft:    '#F0EFFF',
                    },
                    keyframes: {
                        'fade-up': {
                            '0%':   { opacity: '0', transform: 'translateY(32px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'fade-in': {
                            '0%':   { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%':      { transform: 'translateY(-12px)' },
                        },
                        'slide-right': {
                            '0%':   { opacity: '0', transform: 'translateX(-24px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        'scale-in': {
                            '0%':   { opacity: '0', transform: 'scale(0.92)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        'marquee': {
                            '0%':   { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                    },
                    animation: {
                        'fade-up':      'fade-up 0.7s ease both',
                        'fade-up-slow': 'fade-up 1s ease both',
                        'fade-in':      'fade-in 0.6s ease both',
                        'float':        'float 4s ease-in-out infinite',
                        'float-slow':   'float 6s ease-in-out infinite',
                        'slide-right':  'slide-right 0.6s ease both',
                        'scale-in':     'scale-in 0.5s ease both',
                        'marquee':      'marquee 20s linear infinite',
                    },
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Poppins', sans-serif; background: #F8F8FF; color: #06023A; }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #F0EFFF; }
        ::-webkit-scrollbar-thumb { background: #241C86; border-radius: 3px; }

        /* Scroll-reveal via Alpine */
        [data-reveal] { opacity: 0; transform: translateY(28px); transition: opacity 0.7s ease, transform 0.7s ease; }
        [data-reveal].revealed { opacity: 1; transform: translateY(0); }

        [data-reveal-left] { opacity: 0; transform: translateX(-28px); transition: opacity 0.7s ease, transform 0.7s ease; }
        [data-reveal-left].revealed { opacity: 1; transform: translateX(0); }

        [data-reveal-scale] { opacity: 0; transform: scale(0.93); transition: opacity 0.6s ease, transform 0.6s ease; }
        [data-reveal-scale].revealed { opacity: 1; transform: scale(1); }

        /* Stagger delays */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }
        .delay-600 { transition-delay: 600ms; }

        .service-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .service-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(36,28,134,0.12); }

        .team-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .team-card:hover { transform: translateY(-8px); box-shadow: 0 16px 40px rgba(36,28,134,0.15); }

        .tech-badge { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .tech-badge:hover { transform: translateY(-5px); box-shadow: 0 8px 24px rgba(36,28,134,0.12); }
    </style>
</head>

<body
    x-data="{
        mobileMenuOpen: false,
        initReveal() {
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('revealed'); } });
            }, { threshold: 0.12 });
            document.querySelectorAll('[data-reveal],[data-reveal-left],[data-reveal-scale]').forEach(el => obs.observe(el));
        }
    }"
    x-init="initReveal()"
>

    {{-- ===== NAVBAR ===== --}}
    <header class="fixed w-full z-50 transition-all duration-300 animate-fade-in"
            x-data="{ scrolled: false }"
            @scroll.window="scrolled = window.scrollY > 50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20 transition-all duration-300"
                 :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md shadow-primary/10 rounded-b-2xl px-4' : ''">

                <a href="#beranda" class="flex items-center group">
                    <img x-show="!scrolled" src="{{ asset('logo-horizontal-white.png') }}" alt="XGROW STUDIO" class="h-8 w-auto transition-all duration-300 group-hover:opacity-80">
                    <img x-show="scrolled"  src="{{ asset('logo-horizontal-primary.png') }}" alt="XGROW STUDIO" class="h-8 w-auto transition-all duration-300 group-hover:opacity-80">
                </a>

                <div class="hidden lg:flex items-center gap-8">
                    <a href="#beranda"  class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Beranda</a>
                    <a href="#layanan"  class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Layanan</a>
                    <a href="#karya"    class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Karya Kami</a>
                    <a href="#tech"     class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Tech Stack</a>
                    <a href="#tentang"  class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Tentang</a>
                    <a href="#tim"      class="text-sm font-medium transition-colors duration-200 hover:text-primary" :class="scrolled ? 'text-muted' : 'text-white/70 hover:text-white'">Tim</a>
                </div>

                <div class="hidden lg:flex items-center gap-3">
                    <a href="#kontak" class="px-5 py-2.5 rounded-lg border text-sm font-semibold transition-all duration-200"
                       :class="scrolled ? 'border-primary text-primary hover:bg-primary hover:text-white' : 'border-white/30 text-white hover:bg-white/10'">
                        Hubungi Kami
                    </a>
                    <a href="#kontak" class="px-5 py-2.5 rounded-lg bg-primary text-sm font-semibold text-white hover:bg-white hover:text-primary transition-all duration-200 shadow-lg shadow-primary/30">
                        Mulai Proyek
                    </a>
                </div>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 transition-colors"
                        :class="scrolled ? 'text-muted hover:text-primary' : 'text-white/70 hover:text-white'">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-cloak x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div x-cloak x-show="mobileMenuOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 class="lg:hidden bg-white border border-lgray rounded-2xl mt-2 p-6 shadow-xl">
                <div class="flex flex-col gap-4">
                    <a href="#beranda"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Beranda</a>
                    <a href="#layanan"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Layanan</a>
                    <a href="#karya"    @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Karya Kami</a>
                    <a href="#tech"     @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Tech Stack</a>
                    <a href="#tentang"  @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Tentang</a>
                    <a href="#tim"      @click="mobileMenuOpen=false" class="text-sm font-medium text-muted hover:text-primary transition">Tim</a>
                    <a href="#kontak"   @click="mobileMenuOpen=false" class="mt-2 w-full text-center py-3 bg-primary rounded-lg text-white font-semibold hover:bg-navy transition">Mulai Proyek</a>
                </div>
            </div>
        </nav>
    </header>

    {{-- ===== HERO ===== --}}
    <section id="beranda" class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-navy">
        {{-- Floating orbs --}}
        <div class="orb w-[520px] h-[520px] bg-primary/40 -top-40 -left-40 animate-float-slow"></div>
        <div class="orb w-80 h-80 bg-primary/25 bottom-10 right-0 animate-float"></div>
        <div class="orb w-48 h-48 bg-blue-500/15 top-1/3 right-1/4 animate-float-slow" style="animation-delay:2s"></div>

        {{-- Grid texture --}}
        <div class="absolute inset-0 opacity-[0.07]"
             style="background-image: linear-gradient(rgba(255,255,255,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.5) 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 w-full">
            <div class="max-w-4xl">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 mb-8 animate-fade-in" style="animation-delay:0.1s">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-xs font-semibold text-white/80 tracking-widest uppercase">Digital Agency untuk UMKM Lokal</span>
                </div>

                {{-- Headline --}}
                <h1 class="font-heading leading-none tracking-wider text-white mb-6 animate-fade-up" style="animation-delay:0.2s; font-size: clamp(3.5rem, 10vw, 7rem);">
                    HERE WE ARE.<br>
                    <span class="text-primary" style="color: #6B7FFF;">HERE WE GROW.</span>
                </h1>

                <p class="text-sm sm:text-base text-white/60 max-w-2xl mb-10 leading-relaxed animate-fade-up" style="animation-delay:0.4s">
                    XGROW STUDIO hadir sebagai mitra pertumbuhan digital UMKM lokal. Kami bantu bisnismu tumbuh lewat solusi web, mobile app, dan desain produk yang tepat sasaran.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 animate-fade-up" style="animation-delay:0.55s">
                    <a href="#kontak"
                       class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary rounded-xl font-semibold text-white hover:bg-white hover:text-primary transition-all duration-300 shadow-xl shadow-primary/40 hover:-translate-y-1 text-sm">
                        Konsultasi Gratis
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="#karya"
                       class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white/20 rounded-xl font-semibold text-white hover:border-white hover:bg-white/10 hover:-translate-y-1 transition-all duration-300 text-sm">
                        Lihat Karya Kami
                    </a>
                </div>

                {{-- Stats --}}
                <div class="mt-16 pt-10 border-t border-white/10 grid grid-cols-3 gap-8 max-w-sm animate-fade-up" style="animation-delay:0.7s">
                    <div>
                        <p class="font-heading text-4xl text-white">20+</p>
                        <p class="text-xs text-white/50 mt-1">Proyek Selesai</p>
                    </div>
                    <div>
                        <p class="font-heading text-4xl text-white">15+</p>
                        <p class="text-xs text-white/50 mt-1">Klien Puas</p>
                    </div>
                    <div>
                        <p class="font-heading text-4xl text-white">4</p>
                        <p class="text-xs text-white/50 mt-1">Tim Profesional</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 text-white/40 animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </div>
    </section>

    {{-- ===== SERVICES ===== --}}
    <section id="layanan" class="py-24 bg-white relative overflow-hidden">
        <div class="orb w-72 h-72 bg-primary/8 -top-20 right-0 opacity-60 animate-float-slow"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-3" data-reveal>Apa yang Kami Tawarkan</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-navy" data-reveal>LAYANAN KAMI</h2>
                <p class="mt-4 text-muted max-w-xl mx-auto text-sm leading-relaxed" data-reveal>
                    Dari ide hingga produk digital yang siap pakai â€” kami hadir di setiap tahap perjalanan bisnismu.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="service-card bg-soft border border-lgray rounded-2xl p-8 cursor-default group hover:border-primary/40" data-reveal-scale>
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-navy mb-3 tracking-wider">WEB DEVELOPMENT</h3>
                    <p class="text-muted text-sm leading-relaxed">Website & web app responsif menggunakan Laravel + React dengan performa tinggi dan keamanan solid.</p>
                    <div class="mt-6 pt-4 border-t border-lgray flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">Laravel</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">React</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">Tailwind</span>
                    </div>
                </div>

                <div class="service-card bg-soft border border-lgray rounded-2xl p-8 cursor-default group hover:border-primary/40 delay-100" data-reveal-scale>
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-navy mb-3 tracking-wider">MOBILE APP</h3>
                    <p class="text-muted text-sm leading-relaxed">Aplikasi iOS & Android cross-platform dengan React Native / Expo yang cepat dan ringan di semua perangkat.</p>
                    <div class="mt-6 pt-4 border-t border-lgray flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">React Native</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">Expo</span>
                    </div>
                </div>

                <div class="service-card bg-soft border border-lgray rounded-2xl p-8 cursor-default group hover:border-primary/40 delay-200" data-reveal-scale>
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-navy mb-3 tracking-wider">UI/UX DESIGN</h3>
                    <p class="text-muted text-sm leading-relaxed">Desain antarmuka yang intuitif dan memukau â€” dari wireframe hingga high-fidelity prototype di Figma.</p>
                    <div class="mt-6 pt-4 border-t border-lgray flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">Figma</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-primary/10 text-primary font-medium">Prototyping</span>
                    </div>
                </div>

                <div class="service-card bg-primary rounded-2xl p-8 cursor-default delay-300" data-reveal-scale>
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="font-heading text-2xl text-white mb-3 tracking-wider">DIGITAL PRODUCT</h3>
                    <p class="text-white/80 text-sm leading-relaxed">Pengembangan produk digital end-to-end â€” dari konsep, MVP, hingga produk siap pasar yang scalable.</p>
                    <div class="mt-6 pt-4 border-t border-white/20 flex gap-2 flex-wrap">
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white font-medium">MVP</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white font-medium">SaaS</span>
                        <span class="text-xs px-2 py-1 rounded-md bg-white/20 text-white font-medium">API</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== OUR WORK ===== --}}
    <section id="karya" class="py-24 bg-soft relative overflow-hidden">
        <div class="orb w-80 h-80 bg-primary/8 bottom-0 -left-20 opacity-60 animate-float"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-3" data-reveal>Hasil Kerja Kami</p>
                    <h2 class="font-heading text-5xl lg:text-7xl text-navy" data-reveal>OUR WORK</h2>
                </div>
                <a href="#kontak" class="mt-6 md:mt-0 inline-flex items-center gap-2 text-sm text-muted hover:text-primary transition-colors font-medium group" data-reveal>
                    Diskusikan Proyekmu
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group rounded-2xl overflow-hidden border border-lgray bg-white hover:border-primary/30 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 cursor-pointer" data-reveal>
                    <div class="aspect-video bg-gradient-to-br from-primary to-navy flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.15) 1px, transparent 1px); background-size: 20px 20px;"></div>
                        <div class="relative text-center">
                            <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold">Sistem Informasi</span>
                        <h3 class="font-heading text-2xl text-navy tracking-wider mt-3 mb-2">DASHBOARD ORGANISASI</h3>
                        <p class="text-muted text-sm leading-relaxed">Platform manajemen data anggota terpusat dengan role-based access dan reporting otomatis.</p>
                    </div>
                </div>

                <div class="group rounded-2xl overflow-hidden border border-lgray bg-white hover:border-primary/30 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 cursor-pointer delay-200" data-reveal>
                    <div class="aspect-video bg-gradient-to-br from-navy to-primary flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.15) 1px, transparent 1px); background-size: 20px 20px;"></div>
                        <div class="relative text-center">
                            <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold">E-Commerce</span>
                        <h3 class="font-heading text-2xl text-navy tracking-wider mt-3 mb-2">PLATFORM MULTI-VENDOR</h3>
                        <p class="text-muted text-sm leading-relaxed">Marketplace lokal dengan sistem rekomendasi, payment gateway, dan panel seller yang intuitif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== TECH STACK ===== --}}
    <section id="tech" class="py-24 bg-white relative overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-3" data-reveal>Teknologi yang Kami Gunakan</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-navy" data-reveal>TECH STACK</h2>
                <p class="mt-4 text-muted max-w-md mx-auto text-sm leading-relaxed" data-reveal>
                    Stack modern & teruji untuk membangun produk digital yang solid dan scalable.
                </p>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4">

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale>
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#ff2d20" d="M98.494 22.485q.054.2.054.406v21.335a1.56 1.56 0 0 1-.782 1.349L79.86 55.885v20.433a1.56 1.56 0 0 1-.777 1.35L41.705 99.184c-.085.049-.179.08-.272.113-.035.012-.068.033-.105.043a1.6 1.6 0 0 1-.797 0c-.043-.012-.082-.035-.123-.05-.085-.032-.175-.059-.256-.106L2.782 77.668A1.56 1.56 0 0 1 2 76.318V12.316q.001-.21.055-.409c.011-.044.039-.085.054-.13.03-.082.057-.165.1-.241.028-.05.071-.091.106-.138.045-.062.086-.127.138-.18.045-.046.103-.079.154-.118.056-.046.107-.097.171-.134h.002L21.466.208a1.56 1.56 0 0 1 1.555 0l18.686 10.758h.004c.062.04.115.088.171.133.05.038.107.073.152.116.054.056.093.12.14.183.033.047.078.087.105.138.044.078.07.16.1.241.017.045.044.086.055.132q.054.2.055.407V52.29l15.57-8.966V22.89c0-.136.02-.274.055-.404.014-.047.039-.087.055-.132.03-.082.058-.166.1-.241.03-.05.073-.092.106-.138.046-.063.085-.127.14-.181.044-.045.1-.078.151-.117.059-.047.11-.097.171-.134h.002l18.688-10.759a1.56 1.56 0 0 1 1.556 0l18.686 10.759c.066.039.116.087.174.132.05.04.106.074.15.117.055.056.093.12.14.183.035.046.078.087.105.138.045.076.07.16.101.24.018.046.043.086.055.133m-3.06 20.84v-17.74l-6.54 3.764-9.034 5.201v17.74l15.575-8.965zM76.746 75.418V57.665l-8.885 5.075-25.375 14.482v17.92zM5.115 15.008v60.41L39.372 95.14V77.224L21.476 67.096l-.006-.004-.008-.004c-.06-.035-.11-.086-.167-.128-.049-.04-.105-.07-.148-.113l-.004-.006c-.05-.049-.085-.109-.128-.163-.04-.053-.086-.097-.117-.152l-.002-.006c-.035-.058-.056-.128-.082-.194-.025-.059-.058-.113-.073-.175v-.002c-.02-.074-.024-.152-.032-.228-.007-.058-.023-.116-.023-.175V23.974l-9.032-5.203-6.539-3.76zm17.13-11.654L6.678 12.316l15.565 8.962 15.567-8.964-15.567-8.96zm8.097 55.93 9.032-5.2V15.009l-6.54 3.764-9.033 5.201V63.05zM78.305 13.93l-15.567 8.96 15.567 8.962L93.87 22.89zm-1.558 20.62-9.033-5.201-6.54-3.765v17.741l9.032 5.2 6.541 3.766zm-35.82 39.98 22.834-13.036 11.413-6.514-15.555-8.956-17.91 10.311-16.323 9.398z"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Laravel</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:60ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#673ab8" d="m50.302 0 43.302 25v50l-43.302 25L7 75V25z"/><path fill="#fff" d="M18.795 74.587c5.756 7.368 24.05 1.754 41.322-11.74S87.262 32.96 81.506 25.59s-24.051-1.754-41.323 11.74-27.145 29.89-21.388 37.258m2.459-1.922c-1.91-2.443-1.075-7.24 2.562-13.28 3.83-6.358 10.332-13.378 18.288-19.594 7.957-6.216 16.34-10.827 23.438-13.005 6.739-2.068 11.595-1.717 13.504.727 1.91 2.443 1.075 7.24-2.562 13.28-3.83 6.358-10.331 13.378-18.288 19.594S41.856 71.214 34.76 73.392c-6.74 2.068-11.596 1.717-13.505-.727"/><path fill="#fff" d="M81.506 74.587c5.757-7.368-4.117-23.761-21.389-37.256-17.271-13.494-35.566-19.108-41.322-11.74s4.116 23.761 21.388 37.255 35.566 19.109 41.323 11.74m-2.46-1.922c-1.909 2.444-6.765 2.795-13.504.727-7.097-2.178-15.481-6.788-23.437-13.005-7.957-6.216-14.46-13.236-18.289-19.595-3.637-6.039-4.471-10.835-2.562-13.28 1.91-2.443 6.765-2.794 13.504-.726 7.097 2.178 15.481 6.789 23.438 13.005s14.458 13.236 18.288 19.595c3.638 6.038 4.472 10.835 2.562 13.279"/><path fill="#fff" d="M50.15 56.72a6.632 6.632 0 1 0 0-13.262 6.632 6.632 0 0 0 0 13.263"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">React</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:120ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#61dafb" d="M29.66 5.418c-1.656.056-3.234.46-4.66 1.281-2.85 1.645-4.552 4.664-5.316 8.237s-.684 7.822.078 12.578c.293 1.834.723 3.762 1.22 5.733-1.955.554-3.84 1.148-5.575 1.81-4.5 1.72-8.219 3.774-10.931 6.223C1.763 43.73 0 46.71 0 50s1.763 6.274 4.476 8.722c2.712 2.45 6.43 4.505 10.93 6.224 1.735.662 3.62 1.255 5.575 1.81-.497 1.971-.926 3.9-1.22 5.732-.762 4.758-.84 9.006-.077 12.578.766 3.574 2.465 6.592 5.315 8.238s6.313 1.61 9.79.484c3.477-1.125 7.117-3.318 10.856-6.356 1.44-1.17 2.896-2.505 4.355-3.922 1.458 1.417 2.914 2.751 4.355 3.922 3.737 3.039 7.376 5.232 10.854 6.357 3.476 1.125 6.941 1.16 9.791-.484 2.85-1.647 4.552-4.665 5.316-8.238s.682-7.822-.08-12.578c-.293-1.834-.721-3.762-1.218-5.733 1.955-.555 3.84-1.148 5.575-1.81 4.5-1.718 8.219-3.773 10.931-6.223 2.713-2.449 4.476-5.432 4.476-8.722 0-3.291-1.763-6.272-4.476-8.72-2.712-2.45-6.431-4.505-10.931-6.223-1.734-.662-3.618-1.257-5.574-1.811.497-1.971.925-3.9 1.22-5.733.761-4.756.84-9.005.076-12.578C79.55 11.362 77.85 8.344 75 6.699s-6.312-1.61-9.79-.484c-3.476 1.125-7.117 3.318-10.855 6.356-1.44 1.172-2.899 2.506-4.357 3.923-1.459-1.416-2.914-2.752-4.355-3.923-3.737-3.038-7.374-5.233-10.85-6.358-1.74-.562-3.476-.851-5.134-.797zm.2 4.332c1.04-.03 2.23.162 3.594.601 2.727.883 5.996 2.79 9.448 5.594 1.33 1.08 2.69 2.33 4.06 3.664-2.863 3.094-5.702 6.612-8.449 10.496-4.736.437-9.203 1.137-13.315 2.07-.468-1.855-.871-3.656-1.143-5.35-.703-4.39-.718-8.175-.118-10.978.599-2.803 1.72-4.506 3.237-5.382.759-.437 1.647-.687 2.686-.715m40.28 0c1.04.029 1.928.277 2.687.715 1.517.875 2.638 2.579 3.237 5.38.6 2.803.586 6.59-.117 10.98-.271 1.692-.674 3.496-1.143 5.349-4.111-.932-8.578-1.633-13.317-2.07-2.746-3.882-5.587-7.401-8.45-10.496 1.37-1.333 2.733-2.584 4.062-3.664 3.452-2.806 6.721-4.709 9.449-5.592 1.363-.44 2.554-.631 3.593-.601zM50 22.737a97 97 0 0 1 5.813 6.973c-1.91-.086-3.842-.144-5.813-.144s-3.902.057-5.812.144A96 96 0 0 1 50 22.736m0 11.178c3.113 0 6.148.122 9.09.343a121 121 0 0 1 4.842 7.698A121 121 0 0 1 68.177 50a121 121 0 0 1-4.245 8.043 121 121 0 0 1-4.844 7.7c-2.94.22-5.975.344-9.087.344q-4.553 0-9.092-.344a121 121 0 0 1-4.842-7.7 121 121 0 0 1-4.245-8.042 121 121 0 0 1 4.247-8.044 121 121 0 0 1 4.843-7.7q4.538-.343 9.088-.343m-14.666.908a128 128 0 0 0-3.032 4.961 128 128 0 0 0-2.78 5.105 97 97 0 0 1-3.135-8.52 97 97 0 0 1 8.947-1.546m29.333 0q4.51.562 8.947 1.546a97 97 0 0 1-3.134 8.521 128 128 0 0 0-2.782-5.107 128 128 0 0 0-3.03-4.96m-42.507 2.61C23.41 41.46 25.036 45.68 27.027 50c-1.992 4.322-3.617 8.542-4.867 12.569-1.84-.52-3.601-1.074-5.203-1.685-4.155-1.586-7.44-3.467-9.569-5.389-2.127-1.92-3.041-3.742-3.041-5.494s.914-3.572 3.041-5.492c2.128-1.922 5.414-3.803 9.569-5.389 1.602-.611 3.363-1.166 5.203-1.686m55.68 0c1.84.52 3.603 1.075 5.203 1.688 4.156 1.586 7.441 3.465 9.57 5.387 2.127 1.921 3.04 3.742 3.04 5.493s-.913 3.574-3.04 5.494c-2.129 1.922-5.415 3.802-9.57 5.388-1.6.611-3.364 1.164-5.204 1.685-1.248-4.026-2.875-8.245-4.865-12.566 1.992-4.322 3.617-8.541 4.866-12.569M50 41.088a8.914 8.914 0 0 0 0 17.825 8.914 8.914 0 0 0 0-17.825m20.48 14.024a97 97 0 0 1 3.132 8.522 97 97 0 0 1-8.943 1.547 128 128 0 0 0 3.029-4.963q1.448-2.52 2.782-5.106m-40.959.002a128 128 0 0 0 2.781 5.104 130 130 0 0 0 3.032 4.962 96 96 0 0 1-8.947-1.546 97 97 0 0 1 3.134-8.52m-4.324 12.715c4.11.931 8.578 1.63 13.316 2.067 2.747 3.885 5.588 7.404 8.45 10.5-1.37 1.332-2.73 2.582-4.06 3.664-3.451 2.805-6.724 4.71-9.451 5.594-2.727.881-4.762.76-6.28-.116-1.517-.876-2.636-2.578-3.235-5.38-.6-2.803-.585-6.589.118-10.982.272-1.691.672-3.494 1.142-5.347m49.605 0c.47 1.853.872 3.656 1.143 5.347.703 4.393.72 8.179.12 10.982s-1.721 4.505-3.238 5.382c-1.518.875-3.552.995-6.28.112-2.727-.883-5.996-2.789-9.448-5.594-1.329-1.08-2.69-2.33-4.06-3.664 2.863-3.093 5.702-6.614 8.448-10.498 4.737-.437 9.204-1.136 13.315-2.067M44.187 70.29q2.905.14 5.814.145 2.909-.006 5.814-.145A96 96 0 0 1 50 77.268a96 96 0 0 1-5.813-6.977"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">React Native</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:180ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><g clip-path="url(#a)"><path fill="#06b6d4" d="M50 20q-20 0-25 19.994 7.5-9.997 17.5-7.498c3.804.95 6.522 3.71 9.532 6.764 4.902 4.974 10.576 10.731 22.969 10.731q20 0 24.999-19.995-7.5 9.997-17.5 7.5c-3.803-.951-6.521-3.71-9.531-6.765C68.067 25.758 62.392 20 50 20M25 49.991q-20 0-25 19.995 7.5-9.998 17.5-7.498c3.803.952 6.522 3.71 9.532 6.763C31.933 74.225 37.608 79.984 50 79.984q20 0 25-19.995-7.5 9.997-17.5 7.498c-3.803-.95-6.522-3.71-9.532-6.763C43.066 55.75 37.393 49.991 25 49.991"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h100v100H0z"/></clipPath></defs></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Tailwind CSS</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:240ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><g clip-path="url(#a)"><path fill="#0acf83" d="M33.333 100C42.533 100 50 92.533 50 83.333V66.667H33.333c-9.2 0-16.666 7.466-16.666 16.666S24.133 100 33.333 100"/><path fill="#a259ff" d="M16.667 50c0-9.2 7.466-16.667 16.666-16.667H50v33.334H33.333c-9.2 0-16.666-7.467-16.666-16.667"/><path fill="#f24e1e" d="M16.667 16.667C16.667 7.467 24.133 0 33.333 0H50v33.333H33.333c-9.2 0-16.666-7.466-16.666-16.666"/><path fill="#ff7262" d="M50 0h16.667c9.2 0 16.666 7.467 16.666 16.667s-7.466 16.666-16.666 16.666H50z"/><path fill="#1abcfe" d="M83.333 50c0 9.2-7.466 16.667-16.666 16.667S50 59.2 50 50s7.467-16.667 16.667-16.667S83.333 40.8 83.333 50"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h100v100H0z"/></clipPath></defs></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Figma</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:300ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><g fill="#00546b" clip-path="url(#a)"><path d="M92.11 77.066c-5.44-.137-9.657.415-13.194 1.934-1.02.413-2.653.414-2.789 1.726.544.552.612 1.45 1.089 2.209.817 1.38 2.244 3.245 3.536 4.212 1.428 1.104 2.857 2.208 4.353 3.175 2.652 1.657 5.645 2.623 8.23 4.28 1.497.966 2.992 2.21 4.488 3.245.749.552 1.224 1.45 2.177 1.795v-.207c-.477-.622-.613-1.519-1.088-2.21-.68-.69-1.36-1.311-2.04-2.002-1.973-2.692-4.421-5.04-7.074-6.972-2.176-1.52-6.938-3.59-7.821-6.145 0 0-.069-.068-.136-.137 1.496-.138 3.264-.69 4.693-1.105 2.312-.622 4.42-.484 6.8-1.105 1.089-.276 2.177-.621 3.265-.967v-.62c-1.224-1.243-2.108-2.9-3.4-4.074-3.469-3.038-7.278-6.007-11.222-8.492-2.11-1.38-4.83-2.278-7.074-3.452-.816-.414-2.176-.621-2.652-1.312-1.225-1.518-1.905-3.52-2.789-5.315-1.972-3.798-3.877-8.009-5.577-12.013-1.224-2.692-1.972-5.385-3.469-7.87-7.005-11.737-14.622-18.848-26.32-25.82-2.517-1.45-5.51-2.072-8.706-2.83-1.7-.07-3.4-.208-5.1-.278-1.09-.483-2.178-1.794-3.13-2.416C13.284 1.815 3.286-3.57.43 3.541c-1.837 4.487 2.72 8.906 4.284 11.184 1.157 1.588 2.652 3.383 3.469 5.178.476 1.173.611 2.417 1.088 3.66 1.088 3.036 2.108 6.42 3.537 9.25.748 1.45 1.564 2.969 2.516 4.28.544.76 1.496 1.105 1.7 2.348-.951 1.38-1.02 3.452-1.564 5.178-2.449 7.801-1.496 17.466 1.972 23.196 1.088 1.726 3.673 5.524 7.142 4.074 3.06-1.243 2.38-5.178 3.264-8.63.205-.83.069-1.38.476-1.933v.138c.953 1.933 1.904 3.797 2.789 5.73 2.108 3.383 5.78 6.904 8.841 9.252 1.633 1.242 2.925 3.382 4.966 4.142v-.208h-.137c-.408-.621-1.02-.897-1.564-1.38-1.224-1.243-2.585-2.762-3.536-4.143-2.857-3.866-5.374-8.146-7.618-12.565-1.088-2.14-2.04-4.487-2.924-6.627-.409-.83-.409-2.072-1.089-2.485-1.02 1.518-2.516 2.83-3.264 4.694-1.292 2.968-1.428 6.627-1.904 10.424-.273.07-.137 0-.273.14-2.176-.554-2.924-2.832-3.74-4.765-2.041-4.901-2.381-12.772-.613-18.433.477-1.45 2.517-6.006 1.701-7.387-.408-1.312-1.769-2.071-2.517-3.107-.884-1.312-1.836-2.968-2.448-4.418-1.633-3.866-2.449-8.147-4.217-12.013-.816-1.795-2.244-3.659-3.4-5.316-1.293-1.864-2.721-3.176-3.741-5.385-.34-.759-.817-2.002-.272-2.83.136-.553.407-.76.952-.898.884-.76 3.4.207 4.284.621 2.517 1.035 4.625 2.003 6.734 3.452.952.69 1.972 2.003 3.196 2.348h1.429c2.176.483 4.624.138 6.665.759 3.605 1.173 6.87 2.9 9.794 4.764 8.91 5.73 16.255 13.876 21.22 23.61.816 1.588 1.156 3.039 1.904 4.695 1.429 3.383 3.197 6.835 4.625 10.149 1.428 3.244 2.788 6.559 4.829 9.251 1.02 1.45 5.1 2.21 6.937 2.969 1.36.62 3.47 1.174 4.693 1.933 2.312 1.449 4.625 3.107 6.801 4.694 1.089.829 4.489 2.555 4.693 3.935"/><path d="M22.737 17.072c-1.156 0-1.972.139-2.788.345v.138h.136c.544 1.105 1.496 1.865 2.176 2.831.544 1.104 1.02 2.21 1.565 3.314.067-.07.135-.138.135-.138.953-.69 1.429-1.795 1.429-3.452-.409-.483-.477-.966-.817-1.45-.407-.69-1.292-1.035-1.836-1.588"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h100v100H0z"/></clipPath></defs></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">MySQL</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:360ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#d32f2f" d="M100 73.34V57.508c0 3.73-4.083 7.155-10.9 9.863L50 57.507v15.834l39.1 9.862c6.817-2.704 10.9-6.129 10.9-9.862"/><path fill="#d32f2f" d="M89.1 51.55c6.817-2.726 10.9-6.134 10.9-9.867V25.827C100 17.103 77.604 10 50 10 22.375 10 0 17.1 0 25.824v15.858c0 8.738 22.388 15.83 50 15.83V41.69zM50 89.165V73.34c-27.625 0-50-7.104-50-15.825V73.34c0 8.737 22.375 15.825 50 15.825"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">PHP</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:420ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#77c1d2" fill-rule="evenodd" d="M77.778 27 100 49.123 77.778 71.249 55.556 49.124z" clip-rule="evenodd"/><path fill="#2d3441" fill-rule="evenodd" d="m22.222 27 46.07 45.867H23.847L0 49.124z" clip-rule="evenodd"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">JavaScript</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:480ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#000" d="M47.385 37.804c.818-1.19 1.712-1.345 2.442-1.345.724 0 1.934.155 2.752 1.345 10.655 14.514 32.752 52.8 34.795 54.885 3.026 3.088 7.18 1.164 9.59-2.338 2.38-3.45 3.036-5.87 3.036-8.451 0-1.76-34.413-65.247-37.883-70.533C58.786 6.283 57.699 5 51.999 5h-4.267c-5.69 0-6.512 1.283-9.843 6.362C34.413 16.66 0 80.146 0 81.905c0 2.586.657 5.001 3.036 8.451 2.41 3.502 6.564 5.432 9.59 2.339 2.043-2.085 24.11-40.372 34.76-54.88z"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Expo</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:540ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><g clip-path="url(#a)"><path fill="#de4c36" d="M98.114 45.544 54.454 1.886a6.44 6.44 0 0 0-9.108 0l-9.066 9.066 11.5 11.501a7.65 7.65 0 0 1 7.869 1.834 7.66 7.66 0 0 1 1.817 7.916L68.55 43.287c2.682-.923 5.776-.326 7.918 1.82a7.66 7.66 0 0 1 0 10.836 7.662 7.662 0 0 1-12.508-8.335L53.623 37.271v27.202a7.663 7.663 0 0 1 2.026 12.288 7.66 7.66 0 0 1-10.836 0 7.663 7.663 0 0 1 2.508-12.51V36.795a7.6 7.6 0 0 1-2.508-1.672 7.66 7.66 0 0 1-1.651-8.377l-11.338-11.34L1.887 45.344a6.44 6.44 0 0 0 0 9.11l43.661 43.659a6.44 6.44 0 0 0 9.108 0l43.458-43.457a6.444 6.444 0 0 0 0-9.11"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h100v100H0z"/></clipPath></defs></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Git</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:600ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="#8cc84b" d="M46.279 1.067c2.479-1.42 5.709-1.426 8.186 0 12.464 7.042 24.931 14.074 37.393 21.12 2.343 1.321 3.911 3.93 3.887 6.63v42.371c.018 2.813-1.705 5.483-4.178 6.774-12.422 7.004-24.838 14.016-37.259 21.02-2.53 1.447-5.825 1.335-8.277-.23-3.724-2.16-7.455-4.308-11.18-6.465-.76-.453-1.619-.815-2.156-1.552.475-.64 1.324-.72 2.015-1 1.554-.495 2.982-1.288 4.41-2.058.361-.247.802-.152 1.148.069 3.185 1.826 6.342 3.705 9.537 5.513.682.394 1.372-.129 1.955-.453 12.19-6.89 24.396-13.754 36.584-20.646a1.21 1.21 0 0 0 .664-1.191c.009-13.977.002-27.957.005-41.934a1.31 1.31 0 0 0-.781-1.308C75.852 20.756 63.479 13.773 51.102 6.8a1.29 1.29 0 0 0-1.458-.002c-12.378 6.975-24.749 13.964-37.126 20.935-.506.23-.845.738-.785 1.302q.002 20.966 0 41.936a1.19 1.19 0 0 0 .673 1.176c3.303 1.873 6.61 3.733 9.916 5.6 1.861 1.002 4.148 1.597 6.199.83 1.81-.65 3.08-2.497 3.045-4.42.017-13.895-.009-27.793.013-41.686-.046-.617.54-1.127 1.14-1.069 1.586-.01 3.175-.021 4.762.005.663-.015 1.119.649 1.037 1.27-.007 13.984.017 27.968-.01 41.952.003 3.726-1.528 7.781-4.975 9.605-4.247 2.2-9.496 1.733-13.691-.376-3.632-1.813-7.098-3.952-10.666-5.894C6.697 76.68 4.983 73.999 5 71.189V28.817c-.026-2.756 1.604-5.412 4.021-6.713Q27.651 11.588 46.28 1.067"/><path fill="#8cc84b" d="M57.114 30.417c5.417-.348 11.216-.206 16.091 2.462 3.774 2.046 5.867 6.338 5.933 10.53-.105.566-.696.878-1.236.84-1.572-.003-3.144.02-4.716-.011-.667.025-1.054-.59-1.138-1.179-.451-2.006-1.545-3.993-3.434-4.96-2.898-1.452-6.26-1.38-9.42-1.349-2.308.123-4.79.322-6.744 1.68-1.5 1.027-1.957 3.102-1.421 4.773.505 1.2 1.89 1.587 3.023 1.944 6.529 1.708 13.447 1.538 19.85 3.785 2.651.916 5.245 2.697 6.152 5.472 1.187 3.72.667 8.168-1.98 11.154-2.146 2.458-5.273 3.796-8.39 4.522-4.149.925-8.454.949-12.666.538-3.962-.451-8.084-1.492-11.142-4.191-2.614-2.27-3.892-5.808-3.765-9.223.03-.576.605-.978 1.157-.93 1.583-.014 3.165-.018 4.748.001.632-.045 1.101.501 1.133 1.097.292 1.912 1.01 3.918 2.678 5.051 3.216 2.075 7.253 1.933 10.936 1.991 3.052-.135 6.477-.176 8.967-2.193 1.314-1.15 1.703-3.075 1.348-4.73-.384-1.398-1.847-2.05-3.103-2.476-6.444-2.038-13.44-1.299-19.822-3.604-2.59-.916-5.096-2.647-6.092-5.309-1.389-3.767-.752-8.427 2.172-11.313 2.852-2.87 6.968-3.976 10.881-4.372"/></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Node.js</span>
                </div>

                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default" data-reveal-scale style="transition-delay:660ms">
                    <div class="w-10 h-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100"><path fill="url(#a)" d="M98.848 14.801 52.731 98.695a2.486 2.486 0 0 1-4.365.019L1.336 14.808c-1.054-1.878.525-4.153 2.617-3.773L50.12 19.43c.294.053.596.053.89-.002l45.2-8.381c2.086-.387 3.672 1.871 2.638 3.753"/><path fill="url(#b)" d="M72.111.025 37.984 6.828c-.273.054-.52.2-.703.412a1.3 1.3 0 0 0-.307.764l-2.1 36.07a1.3 1.3 0 0 0 .442 1.05 1.25 1.25 0 0 0 1.091.268l9.502-2.23c.889-.21 1.692.587 1.51 1.496l-2.824 14.064c-.19.946.684 1.755 1.592 1.474l5.87-1.813c.909-.281 1.783.53 1.59 1.477l-4.486 22.09c-.28 1.382 1.526 2.135 2.28.951l.503-.791 27.81-56.46c.465-.946-.338-2.024-1.358-1.823l-9.781 1.92c-.92.18-1.701-.69-1.442-1.605l6.384-22.513c.26-.917-.526-1.788-1.446-1.604"/><defs><linearGradient id="a" x1=".187" x2="51.038" y1="17.805" y2="85.688" gradientUnits="userSpaceOnUse"><stop stop-color="#41d1ff"/><stop offset="1" stop-color="#bd34fe"/></linearGradient><linearGradient id="b" x1="54.398" x2="64.98" y1="1.872" y2="73.224" gradientUnits="userSpaceOnUse"><stop stop-color="#ffea83"/><stop offset=".083" stop-color="#ffdd35"/><stop offset="1" stop-color="#ffa800"/></linearGradient></defs></svg></div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">Vite</span>
                </div>

            </div>
        </div>
    </section>

        {{-- ===== ABOUT ===== --}}
    <section id="tentang" class="py-24 bg-soft relative overflow-hidden">
        <div class="orb w-80 h-80 bg-primary/8 top-1/2 -right-20 opacity-50 animate-float-slow"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-reveal-left>
                    <div class="aspect-square max-w-md mx-auto rounded-3xl overflow-hidden border border-lgray shadow-xl shadow-primary/10 bg-soft flex items-center justify-center p-10">
                        <img src="{{ asset('logo-vertical-primary.png') }}" alt="XGROW STUDIO" class="w-full h-full object-contain hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -bottom-4 -right-4 md:right-4 bg-primary rounded-2xl p-5 shadow-2xl shadow-primary/30 animate-float">
                        <p class="font-heading text-2xl text-white leading-tight">HERE WE</p>
                        <p class="font-heading text-2xl text-white/60 leading-tight">GROW.</p>
                    </div>
                </div>

                <div data-reveal>
                    <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-3">Tentang Kami</p>
                    <h2 class="font-heading text-5xl lg:text-6xl text-navy leading-tight mb-6">
                        SOLUSI NYATA<br>UNTUK UMKM<br>LOKAL
                    </h2>
                    <p class="text-muted leading-relaxed mb-5 text-sm">
                        XGROW STUDIO lahir dari keinginan untuk membantu bisnis lokal tumbuh lewat teknologi. Kami bukan hanya vendor â€” kami adalah mitra pertumbuhan yang memahami tantangan nyata UMKM Indonesia.
                    </p>
                    <p class="text-muted leading-relaxed mb-8 text-sm">
                        Dengan pendekatan yang <span class="text-navy font-semibold">fresh, energetic, dan bold</span>, kami menghadirkan solusi digital yang tidak hanya bagus secara visual, tapi juga memberi dampak nyata bagi bisnis.
                    </p>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="border border-lgray rounded-xl p-4 text-center bg-white hover:border-primary/40 hover:-translate-y-1 transition-all duration-200 cursor-default">
                            <p class="font-heading text-xl text-primary">Growth</p>
                            <p class="text-xs text-muted mt-1">Nilai Utama</p>
                        </div>
                        <div class="border border-lgray rounded-xl p-4 text-center bg-white hover:border-primary/40 hover:-translate-y-1 transition-all duration-200 cursor-default delay-100">
                            <p class="font-heading text-xl text-primary">Solution</p>
                            <p class="text-xs text-muted mt-1">Pendekatan</p>
                        </div>
                        <div class="border border-lgray rounded-xl p-4 text-center bg-white hover:border-primary/40 hover:-translate-y-1 transition-all duration-200 cursor-default delay-200">
                            <p class="font-heading text-xl text-primary">Transform</p>
                            <p class="text-xs text-muted mt-1">Dampak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== OUR TEAM ===== --}}
    <section id="tim" class="py-24 bg-white relative overflow-hidden">
        <div class="orb w-64 h-64 bg-primary/8 -top-10 left-1/2 opacity-50 animate-float"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-3" data-reveal>Orang-orang di Balik Karya</p>
                <h2 class="font-heading text-5xl lg:text-7xl text-navy" data-reveal>OUR TEAM</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $team = [
                    ['name' => 'Ari',   'role' => 'Founder & Lead Developer', 'desc' => 'Arsitek utama di balik setiap sistem yang kami bangun. Obsesi pada clean code dan UX yang intuitif.',          'grad' => 'from-primary to-navy',     'delay' => '0ms'],
                    ['name' => 'Prabu', 'role' => 'Co-Founder & Developer',   'desc' => 'Full-stack developer dengan kemampuan problem solving tinggi. Menjembatani ide dan implementasi teknis.',         'grad' => 'from-navy to-primary',     'delay' => '120ms'],
                    ['name' => 'Wiam', 'role' => 'Backend Developer',         'desc' => 'Spesialis backend & database. Memastikan sistem berjalan cepat, aman, dan efisien di balik layar.',             'grad' => 'from-primary/80 to-navy',  'delay' => '240ms'],
                    ['name' => 'Dimas', 'role' => 'Quality Assurance',        'desc' => 'Mata tajam untuk setiap bug dan celah. Memastikan produk yang rilis melewati standar kualitas tertinggi.',       'grad' => 'from-navy to-primary/80',  'delay' => '360ms'],
                ];
                @endphp

                @foreach($team as $member)
                <div class="team-card bg-soft border border-lgray rounded-2xl overflow-hidden" data-reveal-scale style="transition-delay: {{ $member['delay'] }}">
                    <div class="aspect-square bg-gradient-to-br {{ $member['grad'] }} flex items-center justify-center relative overflow-hidden group">
                        <span class="absolute font-heading text-8xl text-white/10 select-none">{{ mb_substr($member['name'], 0, 1) }}</span>
                        <span class="relative font-heading text-5xl text-white z-10 group-hover:scale-110 transition-transform duration-300">{{ mb_substr($member['name'], 0, 1) }}</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-navy tracking-wider">{{ $member['name'] }}</h3>
                        <p class="text-primary text-xs font-semibold mt-1 mb-3">{{ $member['role'] }}</p>
                        <p class="text-muted text-xs leading-relaxed">{{ $member['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CTA / CONTACT ===== --}}
    <section id="kontak" class="py-24 bg-soft relative overflow-hidden">
        <div class="orb w-96 h-96 bg-primary/12 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-float-slow"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-xs font-semibold text-primary uppercase tracking-[0.2em] mb-4" data-reveal>Siap Bertumbuh Bersama?</p>
            <h2 class="font-heading text-navy leading-tight mb-4" data-reveal style="font-size: clamp(3rem, 9vw, 6rem);">
                MULAI PROYEK<br><span class="text-primary">HARI INI</span>
            </h2>
            <p class="text-muted max-w-xl mx-auto mb-10 text-sm leading-relaxed" data-reveal>
                Ceritakan idemu dan tim XGROW STUDIO siap merumuskan solusi terbaik. Konsultasi pertama gratis, tanpa syarat.
            </p>

            <div class="bg-white border border-lgray rounded-3xl p-8 md:p-12 text-left shadow-xl shadow-primary/5" data-reveal>
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-navy uppercase tracking-widest mb-2">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="John Doe"
                                   class="w-full bg-soft border border-lgray rounded-xl px-4 py-3 text-sm text-navy placeholder-muted/50 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy uppercase tracking-widest mb-2">Email</label>
                            <input type="email" name="email" placeholder="john@example.com"
                                   class="w-full bg-soft border border-lgray rounded-xl px-4 py-3 text-sm text-navy placeholder-muted/50 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-navy uppercase tracking-widest mb-2">Layanan yang Dibutuhkan</label>
                        <select name="service"
                                class="w-full bg-soft border border-lgray rounded-xl px-4 py-3 text-sm text-navy focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all appearance-none">
                            <option value="">Pilih Layanan...</option>
                            <option>Web Development</option>
                            <option>Mobile App Development</option>
                            <option>UI/UX Design</option>
                            <option>Digital Product</option>
                            <option>Konsultasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-navy uppercase tracking-widest mb-2">Detail Proyek</label>
                        <textarea name="message" rows="4" placeholder="Ceritakan ide atau kebutuhan proyekmu..."
                                  class="w-full bg-soft border border-lgray rounded-xl px-4 py-3 text-sm text-navy placeholder-muted/50 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all resize-none"></textarea>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <button type="submit"
                                class="w-full sm:w-auto px-10 py-4 bg-primary rounded-xl font-semibold text-white hover:bg-navy transition-all duration-300 shadow-lg shadow-primary/20 hover:shadow-navy/20 hover:-translate-y-1 text-sm">
                            Kirim Pesan
                        </button>
                        <div class="flex items-center gap-2 text-muted text-xs">
                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Respon dalam 1x24 jam
                        </div>
                    </div>
                </form>

                <div class="mt-8 pt-8 border-t border-lgray grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                    <div>
                        <p class="text-xs text-muted mb-1">Email</p>
                        <p class="text-sm text-navy font-semibold">hello@xgrowstudio.com</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted mb-1">WhatsApp</p>
                        <p class="text-sm text-navy font-semibold">+62 812-XXXX-XXXX</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted mb-1">Lokasi</p>
                        <p class="text-sm text-navy font-semibold">Subang, Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-navy py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <a href="#beranda" class="flex items-center group">
                    <img src="{{ asset('logo-horizontal-white.png') }}" alt="XGROW STUDIO" class="h-7 w-auto group-hover:opacity-80 transition-opacity">
                </a>
                <p class="text-xs text-muted italic">"Here We Are. Here We Grow."</p>
                <div class="flex items-center gap-6 text-xs text-muted">
                    <a href="#layanan" class="hover:text-white transition-colors">Layanan</a>
                    <a href="#karya"   class="hover:text-white transition-colors">Karya</a>
                    <a href="#tim"     class="hover:text-white transition-colors">Tim</a>
                    <a href="#kontak"  class="hover:text-white transition-colors">Kontak</a>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-white/10 text-center text-xs text-muted">
                &copy; 2026 XGROW STUDIO. All rights reserved. &nbsp;Â·&nbsp; Subang, Jawa Barat, Indonesia
            </div>
        </div>
    </footer>

</body>
</html>

