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

                <a href="#beranda" class="flex items-center gap-2 group">
                    <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="text-white font-heading text-lg leading-none">X</span>
                    </div>
                    <span class="font-heading text-2xl tracking-widest transition-colors duration-300"
                          :class="scrolled ? 'text-navy' : 'text-white'">
                        XGROW <span class="text-primary" style="color:#6B7FFF" :style="scrolled ? 'color:#241C86' : 'color:#6B7FFF'">STUDIO</span>
                    </span>
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
                    Dari ide hingga produk digital yang siap pakai — kami hadir di setiap tahap perjalanan bisnismu.
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
                    <p class="text-muted text-sm leading-relaxed">Desain antarmuka yang intuitif dan memukau — dari wireframe hingga high-fidelity prototype di Figma.</p>
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
                    <p class="text-white/80 text-sm leading-relaxed">Pengembangan produk digital end-to-end — dari konsep, MVP, hingga produk siap pasar yang scalable.</p>
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
                @php
                $techs = [
                    ['label' => 'Laravel',       'initial' => 'L',   'color' => 'text-red-600',    'bg' => 'bg-red-50',     'delay' => '0ms'],
                    ['label' => 'React',         'initial' => 'R',   'color' => 'text-cyan-600',   'bg' => 'bg-cyan-50',    'delay' => '60ms'],
                    ['label' => 'React Native',  'initial' => 'RN',  'color' => 'text-blue-600',   'bg' => 'bg-blue-50',    'delay' => '120ms'],
                    ['label' => 'Tailwind CSS',  'initial' => 'TW',  'color' => 'text-teal-600',   'bg' => 'bg-teal-50',    'delay' => '180ms'],
                    ['label' => 'Figma',         'initial' => 'F',   'color' => 'text-purple-600', 'bg' => 'bg-purple-50',  'delay' => '240ms'],
                    ['label' => 'MySQL',         'initial' => 'DB',  'color' => 'text-orange-600', 'bg' => 'bg-orange-50',  'delay' => '300ms'],
                    ['label' => 'PHP',           'initial' => 'PHP', 'color' => 'text-indigo-600', 'bg' => 'bg-indigo-50',  'delay' => '360ms'],
                    ['label' => 'JavaScript',    'initial' => 'JS',  'color' => 'text-yellow-600', 'bg' => 'bg-yellow-50',  'delay' => '420ms'],
                    ['label' => 'Expo',          'initial' => 'EX',  'color' => 'text-gray-600',   'bg' => 'bg-gray-100',   'delay' => '480ms'],
                    ['label' => 'Git',           'initial' => 'G',   'color' => 'text-red-700',    'bg' => 'bg-red-50',     'delay' => '540ms'],
                    ['label' => 'REST API',      'initial' => 'API', 'color' => 'text-green-600',  'bg' => 'bg-green-50',   'delay' => '600ms'],
                    ['label' => 'Node.js',       'initial' => 'N',   'color' => 'text-lime-600',   'bg' => 'bg-lime-50',    'delay' => '660ms'],
                ];
                @endphp

                @foreach($techs as $tech)
                <div class="tech-badge group flex flex-col items-center gap-3 p-5 rounded-2xl bg-soft border border-lgray hover:border-primary/30 hover:bg-white hover:shadow-md hover:shadow-primary/10 cursor-default"
                     data-reveal-scale style="transition-delay: {{ $tech['delay'] }}">
                    <div class="w-10 h-10 rounded-xl {{ $tech['bg'] }} flex items-center justify-center">
                        <span class="font-heading text-xs tracking-wider {{ $tech['color'] }}">{{ $tech['initial'] }}</span>
                    </div>
                    <span class="text-xs text-muted group-hover:text-navy transition-colors font-medium text-center">{{ $tech['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== ABOUT ===== --}}
    <section id="tentang" class="py-24 bg-soft relative overflow-hidden">
        <div class="orb w-80 h-80 bg-primary/8 top-1/2 -right-20 opacity-50 animate-float-slow"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-reveal-left>
                    <div class="aspect-square max-w-md mx-auto rounded-3xl overflow-hidden border border-lgray shadow-xl shadow-primary/10">
                        <img src="{{ asset('Foto/kokoh.png') }}" alt="Tim XGROW STUDIO" class="object-cover w-full h-full hover:scale-105 transition-transform duration-700">
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
                        XGROW STUDIO lahir dari keinginan untuk membantu bisnis lokal tumbuh lewat teknologi. Kami bukan hanya vendor — kami adalah mitra pertumbuhan yang memahami tantangan nyata UMKM Indonesia.
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
                <a href="#beranda" class="flex items-center gap-2 group">
                    <div class="w-7 h-7 bg-primary rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="text-white font-heading text-base leading-none">X</span>
                    </div>
                    <span class="font-heading text-xl tracking-widest text-white">XGROW <span class="text-primary/80">STUDIO</span></span>
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
                &copy; 2026 XGROW STUDIO. All rights reserved. &nbsp;·&nbsp; Subang, Jawa Barat, Indonesia
            </div>
        </div>
    </footer>

</body>
</html>
