<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xgrow Studio | Digital Agency Profesional</title>
    <meta name="description" content="Xgrow Studio - Solusi digital untuk bisnis Anda.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        blue: { 50: '#eff6ff', 100: '#dbeafe', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 900: '#1e3a8a', 950: '#172554' }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-white" x-data="{ mobileMenuOpen: false }">

    <header class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-4 flex items-center justify-between border-b border-blue-500 lg:border-none">
                <div class="flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="text-2xl font-extrabold text-blue-900 tracking-tight">Xgrow<span class="text-blue-600">Studio</span></span>
                    </a>
                </div>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="#beranda" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">Beranda</a>
                    <a href="#tentang" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">Tentang Kami</a>
                    <a href="#layanan" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">Layanan</a>
                    <a href="#portfolio" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">Portfolio</a>
                    <a href="#harga" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">Harga</a>
                    <a href="#faq" class="text-base font-medium text-gray-600 hover:text-blue-600 transition">FAQ</a>
                </div>
                <div class="hidden lg:flex space-x-4">
                    <a href="#kontak" class="inline-block bg-white py-2 px-4 border border-blue-600 rounded-md text-base font-medium text-blue-600 hover:bg-blue-50 transition">Masuk</a>
                    <a href="#kontak" class="inline-block bg-blue-600 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-blue-700 transition">Mulai Proyek</a>
                </div>
                <div class="lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" x-cloak x-show="mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div x-cloak x-show="mobileMenuOpen" class="lg:hidden py-4 border-t border-gray-100">
                <div class="flex flex-col space-y-4 px-2">
                    <a href="#beranda" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">Beranda</a>
                    <a href="#tentang" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">Tentang Kami</a>
                    <a href="#layanan" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">Layanan</a>
                    <a href="#portfolio" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">Portfolio</a>
                    <a href="#harga" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">Harga</a>
                    <a href="#faq" @click="mobileMenuOpen = false" class="text-base font-medium text-gray-900 hover:text-blue-600">FAQ</a>
                    <a href="#kontak" @click="mobileMenuOpen = false" class="w-full text-center bg-blue-600 py-3 px-4 rounded-md text-white font-medium hover:bg-blue-700">Mulai Proyek</a>
                </div>
            </div>
        </nav>
    </header>

    <section id="beranda" class="relative bg-blue-50 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-y-0 w-full h-full">
            <svg class="absolute right-0 top-0 transform translate-x-1/2 -translate-y-1/4 text-blue-100 w-1/2 opacity-50" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
            <div class="absolute top-10 left-10 w-32 h-32 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-10 right-10 w-32 h-32 bg-white rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-32 h-32 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-blue-950 sm:text-5xl md:text-6xl lg:text-7xl">
                <span class="block">Inovasi Digital untuk</span>
                <span class="block text-blue-600">Skala Bisnis Global</span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600 sm:text-xl md:mt-8">
                Xgrow Studio adalah mitra teknologi Anda dalam merancang, membangun, dan mengoptimalkan ekosistem digital. Dari UI/UX hingga pengembangan sistem kompleks.
            </p>
            <div class="mt-8 flex justify-center gap-4 flex-col sm:flex-row md:mt-10">
                <a href="#kontak" class="w-full sm:w-auto flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all duration-300">
                    Konsultasi Gratis
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="#portfolio" class="w-full sm:w-auto flex items-center justify-center px-8 py-4 border-2 border-blue-600 text-base font-bold rounded-lg text-blue-600 bg-transparent hover:bg-blue-50 transition-all duration-300">
                    Lihat Karya Kami
                </a>
            </div>
            <div class="mt-16 pt-8 border-t border-blue-200">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-widest mb-6">Dipercaya oleh berbagai perusahaan</p>
                <div class="flex justify-center gap-8 opacity-60 grayscale hover:grayscale-0 transition duration-500 flex-wrap">
                    <div class="text-2xl font-bold text-gray-400">COMPANY 1</div>
                    <div class="text-2xl font-bold text-gray-400">STARTUP 2</div>
                    <div class="text-2xl font-bold text-gray-400">ENTERPRISE</div>
                    <div class="text-2xl font-bold text-gray-400">TECH INC</div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="mb-12 lg:mb-0 relative">
                    <div class="aspect-w-4 aspect-h-3 bg-blue-100 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tim Xgrow Studio" class="object-cover w-full h-full opacity-90 hover:opacity-100 transition duration-500">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-xl shadow-xl hidden md:block">
                        <p class="text-4xl font-extrabold">5+</p>
                        <p class="text-sm font-medium opacity-90">Tahun Pengalaman</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wide mb-2">Tentang Xgrow Studio</h2>
                    <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-6">Membangun Fondasi Digital yang Kokoh</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Kami bukan sekadar pembuat website. Kami adalah arsitek digital yang merancang pengalaman pengguna (UX) yang intuitif, antarmuka (UI) yang memukau, dan sistem backend yang tangguh untuk memastikan bisnis Anda siap menghadapi masa depan.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            <span class="text-gray-700 font-medium">Pendekatan Berbasis Data & Riset Pengguna</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            <span class="text-gray-700 font-medium">Kode Bersih (Clean Code) & Arsitektur Scalable</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            <span class="text-gray-700 font-medium">Dukungan Teknis & Pemeliharaan Jangka Panjang</span>
                        </li>
                    </ul>
                    <a href="#kontak" class="text-blue-600 font-bold hover:text-blue-800 flex items-center transition">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wide mb-2">Layanan Utama Kami</h2>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Solusi Digital End-to-End</h3>
                <p class="mt-4 text-lg text-gray-600">Dari konsep hingga peluncuran, kami menyediakan ekosistem layanan lengkap untuk merealisasikan visi Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Desain antarmuka (Figma) dengan fokus pada journey pengguna, wireframing, dan high-fidelity prototyping yang memanjakan mata.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Web Development</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Pengembangan website responsif dan web app kompleks menggunakan Laravel, React, dan Tailwind CSS dengan keamanan tinggi.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Mobile App Development</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Membangun aplikasi native dan cross-platform (React Native/Flutter) untuk iOS dan Android dengan performa optimal.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Sistem Informasi & E-Commerce</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Pembuatan sistem manajemen khusus (ERP/CRM) dan platform multi-vendor yang terintegrasi dengan payment gateway.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Integrasi AI & API</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Implementasi kecerdasan buatan, sistem rekomendasi, dan integrasi API pihak ketiga ke dalam aplikasi Anda.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Branding & Graphic Design</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">Pembuatan identitas visual, logo, materi promosi, dan desain grafis profesional untuk memperkuat brand awareness.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 text-sm flex items-center">Detail Layanan <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wide mb-2">Karya Kami</h2>
                    <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Proyek Unggulan Xgrow</h3>
                </div>
                <a href="#" class="mt-4 md:mt-0 inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                    Lihat Semua Proyek
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition duration-500">
                    <div class="aspect-w-16 aspect-h-10 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sistem Manajemen" class="object-cover w-full h-full transform group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 p-8 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="inline-block px-3 py-1 bg-blue-600 text-white text-xs font-bold rounded-full mb-3">Sistem Informasi</span>
                        <h4 class="text-2xl font-bold text-white mb-2">Dashboard Organisasi</h4>
                        <p class="text-gray-200 text-sm">Pengembangan platform manajemen data anggota terpusat.</p>
                    </div>
                </div>

                <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition duration-500">
                    <div class="aspect-w-16 aspect-h-10 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Commerce App" class="object-cover w-full h-full transform group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 left-0 p-8 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="inline-block px-3 py-1 bg-blue-600 text-white text-xs font-bold rounded-full mb-3">E-Commerce</span>
                        <h4 class="text-2xl font-bold text-white mb-2">Platform Multi-Vendor</h4>
                        <p class="text-gray-200 text-sm">Aplikasi jual beli dengan integrasi sistem rekomendasi pintar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="harga" class="py-24 bg-blue-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M0 40V0H40" fill="none" stroke="currentColor" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(#grid)"/></svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-sm font-bold text-blue-400 uppercase tracking-wide mb-2">Pilihan Paket</h2>
                <h3 class="text-3xl font-extrabold sm:text-4xl mb-4">Investasi Fleksibel Sesuai Kebutuhan</h3>
                <p class="text-blue-200">Transparan tanpa biaya tersembunyi. Pilih paket yang paling cocok untuk fase bisnis Anda saat ini.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="bg-blue-900/50 backdrop-blur-sm border border-blue-800 rounded-3xl p-8 hover:bg-blue-900 transition">
                    <h4 class="text-xl font-semibold mb-2">Starter</h4>
                    <p class="text-blue-300 text-sm mb-6">Untuk UMKM & Bisnis Baru</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">Rp 3jt</span>
                        <span class="text-blue-300">/proyek</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-blue-100">
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Landing Page 1-3 Halaman</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Desain Responsif (Mobile Friendly)</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Basic SEO Setup</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Hosting & Domain (1 Tahun)</li>
                    </ul>
                    <a href="#kontak" class="block w-full py-3 px-4 bg-transparent border border-blue-600 rounded-lg text-center font-bold text-blue-400 hover:bg-blue-600 hover:text-white transition">Pilih Starter</a>
                </div>

                <div class="bg-blue-600 rounded-3xl p-8 transform lg:-translate-y-4 shadow-2xl relative border border-blue-500">
                    <div class="absolute top-0 right-8 transform -translate-y-1/2">
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide shadow-lg">Populer</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Professional</h4>
                    <p class="text-blue-200 text-sm mb-6">Untuk Perusahaan & Skala Menengah</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">Rp 10jt</span>
                        <span class="text-blue-200">/proyek</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-white">
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-200 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Web App / Laravel</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-200 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> UI/UX Design Custom (Figma)</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-200 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dashboard Admin Terintegrasi</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-200 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Database Management System</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-200 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Gratis Maintenance 3 Bulan</li>
                    </ul>
                    <a href="#kontak" class="block w-full py-3 px-4 bg-white rounded-lg text-center font-bold text-blue-600 hover:bg-gray-50 transition shadow-md">Pilih Professional</a>
                </div>

                <div class="bg-blue-900/50 backdrop-blur-sm border border-blue-800 rounded-3xl p-8 hover:bg-blue-900 transition">
                    <h4 class="text-xl font-semibold mb-2">Enterprise</h4>
                    <p class="text-blue-300 text-sm mb-6">Sistem Kompleks & Skala Besar</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">Custom</span>
                    </div>
                    <ul class="space-y-4 mb-8 text-sm text-blue-100">
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Mobile App (React Native/Expo)</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Multi-vendor & Payment Gateway</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Integrasi API & AI System</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dedicated Server Setup</li>
                    </ul>
                    <a href="#kontak" class="block w-full py-3 px-4 bg-transparent border border-blue-600 rounded-lg text-center font-bold text-blue-400 hover:bg-blue-600 hover:text-white transition">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Pertanyaan Umum (FAQ)</h2>
                <p class="mt-4 text-lg text-gray-600">Jawaban cepat untuk pertanyaan yang sering diajukan klien kami.</p>
            </div>
            
            <div class="space-y-4">
                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-semibold text-gray-900">Berapa lama waktu pengerjaan sebuah website?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform duration-200" :class="{'rotate-180': expanded}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak class="px-6 pb-4">
                        <p class="text-gray-600 text-sm">Waktu pengerjaan bervariasi tergantung kompleksitas. Landing page standar memakan waktu 1-2 minggu, sementara sistem custom atau e-commerce bisa memakan waktu 1-3 bulan.</p>
                    </div>
                </div>

                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-semibold text-gray-900">Apakah saya mendapatkan akses kode sumber (source code)?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform duration-200" :class="{'rotate-180': expanded}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak class="px-6 pb-4">
                        <p class="text-gray-600 text-sm">Ya, untuk paket Professional dan Enterprise, source code sepenuhnya akan diserahkan kepada Anda setelah proyek selesai dan pelunasan dilakukan.</p>
                    </div>
                </div>

                <div x-data="{ expanded: false }" class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <button @click="expanded = !expanded" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-semibold text-gray-900">Teknologi apa yang digunakan Xgrow Studio?</span>
                        <svg class="w-5 h-5 text-blue-600 transform transition-transform duration-200" :class="{'rotate-180': expanded}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="expanded" x-collapse x-cloak class="px-6 pb-4">
                        <p class="text-gray-600 text-sm">Kami menggunakan stack modern. Untuk backend PHP/Laravel, frontend React/Tailwind, mobile dengan React Native/Expo, serta desain UI/UX menggunakan Figma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-600 rounded-3xl overflow-hidden shadow-2xl flex flex-col lg:flex-row">
                <div class="lg:w-2/5 bg-blue-900 p-10 lg:p-14 text-white flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-16 -mr-16 text-blue-800 opacity-50">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-4">Mari Berdiskusi</h3>
                        <p class="text-blue-200 mb-8">Ceritakan ide Anda, dan tim kami akan merumuskan solusi teknis terbaik untuk mewujudkannya.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <span>hello@xgrowstudio.com</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span>+62 812-XXXX-XXXX</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <span>Subang, Jawa Barat, Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/5 p-10 lg:p-14 bg-white">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Jhon Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="jhon@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Layanan yang Dibutuhkan</label>
                            <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-white">
                                <option>UI/UX Design</option>
                                <option>Web Development (Laravel/React)</option>
                                <option>Mobile Apps Development</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan / Detail Proyek</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Jelaskan secara singkat tentang proyek Anda..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 px-8 rounded-lg hover:bg-blue-700 transition shadow-lg">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white pt-16 pb-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 lg:col-span-1">
                    <a href="#" class="flex items-center gap-2 mb-6">
                        <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="text-2xl font-extrabold text-white tracking-tight">Xgrow<span class="text-blue-500">Studio</span></span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Mitra digital terpercaya untuk membangun masa depan teknologi bisnis Anda dengan desain dan kode berkualitas tinggi.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#beranda" class="hover:text-blue-500 transition">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-blue-500 transition">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-blue-500 transition">Layanan</a></li>
                        <li><a href="#portfolio" class="hover:text-blue-500 transition">Portfolio</a></li>
                        <li><a href="#harga" class="hover:text-blue-500 transition">Harga Paket</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-500 transition">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">Web Development</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">Mobile App</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">Sistem E-Commerce</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">AI Integration</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Berlangganan</h4>
                    <p class="text-gray-400 text-sm mb-4">Dapatkan update terbaru seputar teknologi dan promo layanan kami.</p>
                    <form action="#" class="flex">
                        <input type="email" placeholder="Email Anda" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-md focus:outline-none focus:border-blue-500 text-sm">
                        <button type="submit" class="bg-blue-600 px-4 py-2 rounded-r-md text-white font-semibold hover:bg-blue-700 transition text-sm">Kirim</button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">&copy; 2026 Xgrow Studio. All rights reserved.</p>
                <div class="flex space-x-4 text-sm text-gray-500">
                    <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>