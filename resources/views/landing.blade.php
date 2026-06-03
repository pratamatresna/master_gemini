<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Master Gemini - Platform belajar AI Gemini terbaik di Indonesia. Pelajari cara menggunakan Google Gemini untuk produktivitas, coding, dan kreativitas. Kelas live, video on-demand, dan project-based learning.">
    <meta name="keywords" content="gemini, google gemini, belajar AI, kursus AI, master gemini, kelas gemini">
    <meta name="author" content="Master Gemini">

    <title>Master Gemini — Kuasai AI Gemini, Mulai Dari Sini</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-text-primary font-sans antialiased">

    {{-- ============================================
         NAVIGATION BAR
         ============================================ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-18">
                <a href="#" class="flex items-center gap-2 group">
                    <div
                        class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center shadow-lg group-hover:shadow-primary/40 transition-shadow duration-300">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text">Master Gemini</span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="#hero"
                        class="text-sm font-medium text-text-secondary hover:text-primary transition-colors duration-200">Beranda</a>
                    <a href="#keunggulan"
                        class="text-sm font-medium text-text-secondary hover:text-primary transition-colors duration-200">Keunggulan</a>
                    <a href="#tutor"
                        class="text-sm font-medium text-text-secondary hover:text-primary transition-colors duration-200">Tutor</a>
                    <a href="#paket"
                        class="text-sm font-medium text-text-secondary hover:text-primary transition-colors duration-200">Paket</a>
                    <a href="#testimoni"
                        class="text-sm font-medium text-text-secondary hover:text-primary transition-colors duration-200">Testimoni</a>
                </div>

                <div class="hidden md:flex items-center gap-3">
                    <a href="#paket"
                        class="inline-flex items-center gap-2 px-6 py-2.5 rounded-xl text-sm font-semibold text-white gradient-bg hover:opacity-90 transition-all duration-300 shadow-lg shadow-primary/25 hover:shadow-primary/40 hover:-translate-y-0.5">
                        Mulai Belajar
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-border/30 transition-colors">
                    <i data-lucide="menu" class="w-6 h-6 text-text-primary"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden bg-surface/95 backdrop-blur-lg border-t border-border">
            <div class="px-4 py-4 space-y-2">
                <a href="#hero"
                    class="block px-4 py-2.5 rounded-lg text-sm font-medium text-text-secondary hover:bg-primary/5 hover:text-primary transition-all">Beranda</a>
                <a href="#keunggulan"
                    class="block px-4 py-2.5 rounded-lg text-sm font-medium text-text-secondary hover:bg-primary/5 hover:text-primary transition-all">Keunggulan</a>
                <a href="#tutor"
                    class="block px-4 py-2.5 rounded-lg text-sm font-medium text-text-secondary hover:bg-primary/5 hover:text-primary transition-all">Tutor</a>
                <a href="#paket"
                    class="block px-4 py-2.5 rounded-lg text-sm font-medium text-text-secondary hover:bg-primary/5 hover:text-primary transition-all">Paket</a>
                <a href="#testimoni"
                    class="block px-4 py-2.5 rounded-lg text-sm font-medium text-text-secondary hover:bg-primary/5 hover:text-primary transition-all">Testimoni</a>
                <a href="#paket"
                    class="block px-4 py-3 rounded-xl text-sm font-semibold text-white gradient-bg text-center mt-2">Mulai
                    Belajar</a>
            </div>
        </div>
    </nav>

    {{-- ============================================
         HERO SECTION
         ============================================ --}}
    <section id="hero" class="relative min-h-screen flex items-center overflow-hidden pt-20">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="hero-blob w-96 h-96 bg-primary top-10 -left-20"></div>
            <div class="hero-blob w-80 h-80 bg-secondary top-40 right-0" style="animation-delay: -3s;"></div>
            <div class="hero-blob w-64 h-64 bg-accent bottom-20 left-1/3" style="animation-delay: -5s;"></div>
            <div class="absolute inset-0 opacity-[0.03]"
                style="background-image: radial-gradient(circle, #4285F4 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                        <span class="text-sm font-medium text-primary">Pendaftaran Batch Baru Dibuka!</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight tracking-tight mb-6">
                        Kuasai
                        <span class="gradient-text"> Google Gemini</span>
                        <br>
                        Mulai Dari Sini
                    </h1>

                    <p class="text-lg sm:text-xl text-text-secondary leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                        Pelajari cara menggunakan AI Gemini untuk meningkatkan <strong
                            class="text-text-primary">produktivitas</strong>, <strong
                            class="text-text-primary">coding</strong>, dan <strong
                            class="text-text-primary">kreativitas</strong> Anda bersama tutor berpengalaman.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <a href="#paket"
                            class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl text-base font-bold text-white gradient-bg hover:opacity-90 transition-all duration-300 shadow-xl shadow-primary/25 hover:shadow-primary/40 hover:-translate-y-1">
                            <i data-lucide="rocket" class="w-5 h-5"></i>
                            Mulai Belajar Sekarang
                        </a>
                        <a href="#keunggulan"
                            class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl text-base font-bold text-primary bg-white border-2 border-primary/20 hover:border-primary/40 hover:bg-primary/5 transition-all duration-300 hover:-translate-y-1">
                            <i data-lucide="play-circle" class="w-5 h-5"></i>
                            Lihat Kelas
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0">
                        <div class="text-center lg:text-left">
                            <div class="text-3xl sm:text-4xl font-black text-text-primary" data-count="500">0+</div>
                            <div class="text-sm text-text-secondary mt-1">Alumni</div>
                        </div>
                        <div class="text-center lg:text-left border-x border-border px-4">
                            <div class="text-3xl sm:text-4xl font-black text-text-primary" data-count="20">0+</div>
                            <div class="text-sm text-text-secondary mt-1">Kursus</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-3xl sm:text-4xl font-black text-text-primary">4.9</div>
                            <div
                                class="text-sm text-text-secondary mt-1 flex items-center gap-1 justify-center lg:justify-start">
                                <i data-lucide="star" class="w-3.5 h-3.5 text-warning fill-warning"></i>
                                Rating
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-lg">
                        <div
                            class="relative bg-surface rounded-3xl shadow-2xl border border-border p-8 overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1.5 gradient-bg"></div>

                            <div class="flex items-center gap-4 mb-6">
                                <div
                                    class="w-14 h-14 rounded-2xl gradient-bg flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                        <path d="M2 17l10 5 10-5" />
                                        <path d="M2 12l10 5 10-5" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-text-primary">Google Gemini</h3>
                                    <p class="text-sm text-text-secondary">AI Multi-Modal Terbaik</p>
                                </div>
                            </div>

                            <div class="bg-[#1A1F36] rounded-2xl p-5 mb-6 font-mono text-sm overflow-hidden">
                                <div class="flex gap-2 mb-4">
                                    <div class="w-3 h-3 rounded-full bg-error"></div>
                                    <div class="w-3 h-3 rounded-full bg-warning"></div>
                                    <div class="w-3 h-3 rounded-full bg-success"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <p><span class="text-secondary-light">const</span> <span
                                            class="text-accent">gemini</span> = <span
                                            class="text-primary-light">new</span> <span
                                            class="text-warning">GeminiAI</span>();</p>
                                    <p><span class="text-secondary-light">const</span> <span
                                            class="text-accent">response</span> = <span
                                            class="text-primary-light">await</span></p>
                                    <p class="pl-4"><span class="text-accent">gemini</span>.<span
                                            class="text-success">generate</span>({</p>
                                    <p class="pl-8"><span class="text-primary-light">prompt</span>: <span
                                            class="text-success">"Buat landing page..."</span></p>
                                    <p class="pl-4">});</p>
                                    <p class="mt-2 text-success">// ✓ Output siap digunakan!</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-semibold">Gemini
                                    Pro</span>
                                <span
                                    class="px-3 py-1.5 rounded-full bg-secondary/10 text-secondary text-xs font-semibold">Multi-Modal</span>
                                <span
                                    class="px-3 py-1.5 rounded-full bg-accent/10 text-accent-dark text-xs font-semibold">API
                                    Access</span>
                                <span
                                    class="px-3 py-1.5 rounded-full bg-success/10 text-success text-xs font-semibold">Free
                                    Tier</span>
                            </div>
                        </div>

                        <div class="absolute -top-4 -left-4 bg-surface rounded-2xl shadow-xl border border-border p-4 hidden lg:flex items-center gap-3"
                            style="animation: float 4s ease-in-out infinite;">
                            <div class="w-10 h-10 rounded-xl bg-success/10 flex items-center justify-center">
                                <i data-lucide="check-circle" class="w-5 h-5 text-success"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-text-primary">Sertifikat</p>
                                <p class="text-[11px] text-text-secondary">Diakui Industri</p>
                            </div>
                        </div>

                        <div class="absolute -bottom-4 -right-4 bg-surface rounded-2xl shadow-xl border border-border p-4 hidden lg:flex items-center gap-3"
                            style="animation: float 5s ease-in-out infinite; animation-delay: -2s;">
                            <div class="w-10 h-10 rounded-xl bg-warning/10 flex items-center justify-center">
                                <i data-lucide="users" class="w-5 h-5 text-warning"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-text-primary">500+ Alumni</p>
                                <p class="text-[11px] text-text-secondary">Bergabung Sekarang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         TESTIMONIAL SECTION
         ============================================ --}}
    <section id="testimoni"
        class="py-20 lg:py-28 bg-gradient-to-b from-surface to-background relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-secondary/3 rounded-full blur-[150px]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <div class="text-center mb-16 fade-in-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-warning/10 text-warning text-sm font-semibold mb-4">
                    <i data-lucide="star" class="w-4 h-4 fill-warning"></i>
                    Apa Kata Mereka?
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Testimoni <span class="gradient-text">Alumni</span>
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Ratusan alumni sudah merasakan manfaatnya. Simak cerita sukses mereka bersama Master Gemini.
                </p>
            </div>
            <div class="relative w-full overflow-hidden flex group"
                style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
                <div class="animate-marquee-right flex gap-6 py-4">
                    @for ($i = 0; $i < 2; $i++)
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Setelah ikut kelas Master
                                Gemini, produktivitas kerja saya meningkat 3x lipat. Sekarang saya bisa menggunakan
                                Gemini untuk coding, menulis konten, dan analisis data dengan sangat efektif."</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full gradient-bg flex items-center justify-center text-white font-bold text-sm">
                                    DN</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Dian Nugroho</p>
                                    <p class="text-xs text-text-secondary">Software Engineer at Tokopedia</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Tutornya sangat berpengalaman
                                dan sabar menjelaskan. Materinya up-to-date dan langsung bisa dipraktikkan. Komunitas
                                alumni juga sangat aktif dan saling membantu."</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full bg-gradient-to-br from-secondary to-primary flex items-center justify-center text-white font-bold text-sm">
                                    RA</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Rina Amelia</p>
                                    <p class="text-xs text-text-secondary">Digital Marketing Manager</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Investasi paling worth it di
                                2024! Sekarang saya bisa automate banyak task di kantor pakai Gemini API. Klien saya
                                juga impressed dengan hasil kerjaan yang lebih cepat."</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full bg-gradient-to-br from-accent to-primary flex items-center justify-center text-white font-bold text-sm">
                                    FS</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Fajar Setiawan</p>
                                    <p class="text-xs text-text-secondary">Freelance Developer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Sebagai content creator,
                                Gemini jadi senjata rahasia saya. Dari riset, scripting, sampai editing—semuanya jadi
                                jauh lebih cepat. Terima kasih Master Gemini!"</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full bg-gradient-to-br from-warning to-error flex items-center justify-center text-white font-bold text-sm">
                                    ML</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Maya Lestari</p>
                                    <p class="text-xs text-text-secondary">Content Creator & YouTuber</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 4; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                                <i data-lucide="star" class="w-4 h-4 text-warning"></i>
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Project-based learning-nya top
                                banget! Setelah selesai kelas, saya langsung punya portfolio project AI yang bisa saya
                                tunjukkan saat interview kerja."</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full bg-gradient-to-br from-success to-accent flex items-center justify-center text-white font-bold text-sm">
                                    AH</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Andi Hermawan</p>
                                    <p class="text-xs text-text-secondary">Fresh Graduate IT</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex gap-1 mb-4">
                                @for ($i = 0; $i < 5; $i++)
                                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                                @endfor
                            </div>
                            <p class="text-text-secondary text-sm leading-relaxed mb-6">"Tim kami mengikuti paket
                                Enterprise dan hasilnya luar biasa. Seluruh tim product sekarang bisa memanfaatkan AI
                                dengan baik untuk daily workflow mereka."</p>
                            <div class="flex items-center gap-3 pt-4 border-t border-border">
                                <div
                                    class="w-11 h-11 rounded-full gradient-bg flex items-center justify-center text-white font-bold text-sm">
                                    KP</div>
                                <div>
                                    <p class="text-sm font-bold text-text-primary">Karina Prasetyo</p>
                                    <p class="text-xs text-text-secondary">VP of Product at Startup</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </section>

    {{-- ============================================
         KEUNGGULAN & FORMAT KELAS SECTION
         ============================================ --}}
    <section id="keunggulan" class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 text-secondary text-sm font-semibold mb-4">
                    <i data-lucide="sparkles" class="w-4 h-4"></i>
                    Mengapa Pilih Kami?
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Keunggulan <span class="gradient-text">Master Gemini</span>
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Kami dirancang khusus untuk membantu Anda menguasai Google Gemini dari dasar hingga mahir dengan
                    metode pembelajaran yang terbukti efektif.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-20 stagger-children">
                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-primary/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <i data-lucide="video"
                            class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Live Class Interaktif</h3>
                    <p class="text-text-secondary leading-relaxed">Belajar langsung dengan tutor secara real-time.
                        Tanya jawab, diskusi, dan praktik langsung dalam sesi live yang terjadwal.</p>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-secondary/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-all duration-300">
                        <i data-lucide="play-circle"
                            class="w-7 h-7 text-secondary group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Video On-Demand</h3>
                    <p class="text-text-secondary leading-relaxed">Akses materi kapan saja, di mana saja. Video
                        berkualitas HD dengan subtitle bahasa Indonesia, bisa diulang sepuasnya.</p>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-accent/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:text-white transition-all duration-300">
                        <i data-lucide="folder-kanban"
                            class="w-7 h-7 text-accent-dark group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Project Based</h3>
                    <p class="text-text-secondary leading-relaxed">Belajar dengan membuat project nyata. Portfolio Anda
                        akan terbangun seiring menyelesaikan setiap modul pembelajaran.</p>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-success/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-success/10 flex items-center justify-center mb-6 group-hover:bg-success group-hover:text-white transition-all duration-300">
                        <i data-lucide="award"
                            class="w-7 h-7 text-success group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Sertifikat Resmi</h3>
                    <p class="text-text-secondary leading-relaxed">Dapatkan sertifikat kelulusan yang diakui industri
                        setelah menyelesaikan kelas dan project akhir.</p>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-warning/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-warning/10 flex items-center justify-center mb-6 group-hover:bg-warning group-hover:text-white transition-all duration-300">
                        <i data-lucide="message-circle"
                            class="w-7 h-7 text-warning group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Komunitas Eksklusif</h3>
                    <p class="text-text-secondary leading-relaxed">Bergabung dengan komunitas learners eksklusif.
                        Networking, sharing session, dan dukungan 24/7 dari sesama member.</p>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border p-8 hover:shadow-xl hover:shadow-error/5 hover:-translate-y-2 transition-all duration-500">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:gradient-bg group-hover:text-white transition-all duration-300">
                        <i data-lucide="infinity"
                            class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">Lifetime Access</h3>
                    <p class="text-text-secondary leading-relaxed">Bayar sekali, akses selamanya. Termasuk update
                        materi terbaru mengikuti perkembangan Google Gemini.</p>
                </div>
            </div>

            <div class="fade-in-up">
                <div class="text-center mb-12">
                    <h3 class="text-2xl sm:text-3xl font-bold text-text-primary mb-3">Format Kelas yang Tersedia</h3>
                    <p class="text-text-secondary max-w-xl mx-auto">Pilih format belajar yang paling cocok dengan gaya
                        Anda</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 stagger-children">
                    <div
                        class="fade-in-up relative bg-gradient-to-br from-primary/5 to-primary/10 rounded-2xl border border-primary/20 p-8 text-center hover:shadow-lg hover:shadow-primary/10 transition-all duration-500">
                        <div
                            class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center mx-auto mb-5 shadow-lg shadow-primary/20">
                            <i data-lucide="monitor-play" class="w-8 h-8 text-white"></i>
                        </div>
                        <h4 class="text-lg font-bold text-text-primary mb-2">Live Class</h4>
                        <p class="text-sm text-text-secondary mb-4">Interaksi langsung dengan tutor. Jadwal tetap, 2x
                            seminggu, durasi 2 jam per sesi.</p>
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-semibold">Realtime
                            Interactive</span>
                    </div>

                    <div
                        class="fade-in-up relative bg-gradient-to-br from-secondary/5 to-secondary/10 rounded-2xl border border-secondary/20 p-8 text-center hover:shadow-lg hover:shadow-secondary/10 transition-all duration-500">
                        <div
                            class="w-16 h-16 rounded-2xl bg-secondary flex items-center justify-center mx-auto mb-5 shadow-lg shadow-secondary/20">
                            <i data-lucide="clapperboard" class="w-8 h-8 text-white"></i>
                        </div>
                        <h4 class="text-lg font-bold text-text-primary mb-2">Video On-Demand</h4>
                        <p class="text-sm text-text-secondary mb-4">100+ video materi berkualitas HD. Tonton kapan
                            saja, di mana saja, bisa diulang.</p>
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-semibold">Self-Paced
                            Learning</span>
                    </div>

                    <div
                        class="fade-in-up relative bg-gradient-to-br from-accent/5 to-accent/10 rounded-2xl border border-accent/20 p-8 text-center hover:shadow-lg hover:shadow-accent/10 transition-all duration-500">
                        <div
                            class="w-16 h-16 rounded-2xl bg-accent flex items-center justify-center mx-auto mb-5 shadow-lg shadow-accent/20">
                            <i data-lucide="code-2" class="w-8 h-8 text-white"></i>
                        </div>
                        <h4 class="text-lg font-bold text-text-primary mb-2">Project Based</h4>
                        <p class="text-sm text-text-secondary mb-4">Bangun 10+ project nyata. Review code, mentoring,
                            dan portfolio siap pakai.</p>
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-accent/10 text-accent-dark text-xs font-semibold">Hands-On
                            Practice</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         HASIL PRODUK / SHOWCASE SECTION
         ============================================ --}}
    <section id="showcase"
        class="py-20 lg:py-28 relative bg-gradient-to-b from-background to-surface border-y border-border">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 text-secondary text-sm font-semibold mb-4">
                    <i data-lucide="layers" class="w-4 h-4"></i>
                    Showcase Project
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Hasil <span class="gradient-text">Produk</span> Course
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Beberapa contoh aplikasi dan automasi nyata yang akan Anda pelajari dan bangun sendiri selama
                    mengikuti kelas ini.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 stagger-children">
                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 bg-gray-50 border-b border-border p-4 relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9IiNlMmU4ZjAiLz48L3N2Zz4=')] opacity-50">
                        </div>
                        <div
                            class="relative w-full h-full bg-white rounded-xl shadow-sm border border-border/50 p-4 flex flex-col gap-3 group-hover:scale-105 transition-transform duration-500">
                            <div class="w-3/4 h-8 bg-gray-100 rounded-lg self-start flex items-center px-3">
                                <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                            </div>
                            <div
                                class="w-2/3 h-12 bg-primary/10 rounded-lg self-end flex items-center justify-end px-3 border border-primary/20">
                                <div class="w-16 h-2 rounded-full bg-primary/40"></div>
                            </div>
                            <div class="w-5/6 h-8 bg-gray-100 rounded-lg self-start flex items-center px-3">
                                <div class="w-12 h-2 rounded-full bg-gray-300"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider">Customer
                                Service</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">Automated AI Chatbot</h3>
                        <p class="text-sm text-text-secondary">Membangun sistem CS otomatis berbasis RAG
                            (Retrieval-Augmented Generation) yang mampu menjawab keluhan pelanggan berdasarkan dokumen
                            perusahaan.</p>
                    </div>
                </div>

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="h-48 bg-[#1A1F36] border-b border-border p-4 relative overflow-hidden flex items-center justify-center">
                        <div
                            class="w-full h-full bg-black/40 rounded-xl shadow-inner border border-white/10 p-4 font-mono text-[10px] text-gray-400 group-hover:scale-105 transition-transform duration-500 flex flex-col justify-center">
                            <p><span class="text-secondary-light">async def</span> <span
                                    class="text-accent">generate_report</span>(data):</p>
                            <p class="pl-4"><span class="text-gray-500"># Gemini analyzes the sales data</span></p>
                            <p class="pl-4">prompt = <span class="text-success">f"Analyze
                                    @{{ data }}"</span></p>
                            <p class="pl-4">res = <span class="text-primary-light">await</span>
                                model.generate(prompt)</p>
                            <p class="pl-4"><span class="text-secondary-light">return</span> res.text</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-2.5 py-1 rounded-md bg-secondary/10 text-secondary text-[10px] font-bold uppercase tracking-wider">Data
                                Pipeline</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">Smart Report Generator</h3>
                        <p class="text-sm text-text-secondary">Script Python yang otomatis menarik data dari database,
                            dianalisis oleh Gemini, dan di-export menjadi laporan PDF mingguan.</p>
                    </div>
                </div>

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="h-48 bg-gradient-to-br from-accent/20 to-primary/20 border-b border-border p-4 relative overflow-hidden flex items-center justify-center">
                        <div
                            class="w-full h-full bg-white/60 backdrop-blur-md rounded-xl shadow-sm border border-white p-3 flex flex-col gap-2 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex gap-2">
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                            </div>
                            <div
                                class="flex-grow bg-white rounded-lg shadow-sm border border-border/50 p-2 flex items-end gap-2">
                                <div class="w-1/5 h-1/2 bg-accent/40 rounded-t-sm"></div>
                                <div class="w-1/5 h-3/4 bg-primary/40 rounded-t-sm"></div>
                                <div class="w-1/5 h-full bg-secondary/40 rounded-t-sm"></div>
                                <div class="w-1/5 h-2/3 bg-success/40 rounded-t-sm"></div>
                                <div class="w-1/5 h-1/3 bg-warning/40 rounded-t-sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-2.5 py-1 rounded-md bg-accent/10 text-accent-dark text-[10px] font-bold uppercase tracking-wider">Marketing</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">SEO Content Dashboard</h3>
                        <p class="text-sm text-text-secondary">Dashboard interaktif (Next.js) untuk generate artikel
                            blog SEO-friendly, meta tag, dan visualisasi trend menggunakan Gemini API.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================
         PRODUK COURSE SECTION
         ============================================ --}}
    <section id="paket" class="py-16 lg:py-20 relative bg-surface">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 fade-in-up">
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">
                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                    Pilih Kelas
                </span>
                <h2 class="text-3xl lg:text-4xl font-black text-text-primary mb-3">
                    Paket <span class="gradient-text">Course</span>
                </h2>
                <p class="text-base text-text-secondary max-w-2xl mx-auto">
                    Materi komprehensif yang dirancang khusus untuk profesi Anda.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6 stagger-children">

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    <div class="p-4 border-b border-border/50 flex justify-between items-center bg-background/50">
                        <span
                            class="px-2.5 py-1 rounded-md bg-warning/10 text-warning text-[10px] font-bold uppercase tracking-wider">
                            Terpopuler
                        </span>
                        <div class="text-right">
                            <span class="text-[10px] text-text-secondary line-through">Rp 299k</span>
                            <span class="text-sm font-bold text-primary ml-1">Rp 149k</span>
                        </div>
                    </div>
                    <div class="p-4 lg:p-5 flex flex-col flex-grow">
                        <h3 class="text-base lg:text-lg font-bold text-text-primary leading-tight mb-1">Gemini for
                            Developer</h3>
                        <p class="text-[11px] lg:text-xs text-text-secondary mb-4">Software developer, engineer, tech
                            lead</p>
                        <div class="flex flex-col gap-1.5 mb-4 pb-4 border-b border-border/50">
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-success"></i>
                                <span class="text-[11px] lg:text-xs text-text-secondary">Foundation & Akses Seumur
                                    Hidup</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4 flex-grow">

                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Code review
                                    automation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Debugging
                                    assistant</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Unit test
                                    generation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Prototyping
                                    cepat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Dokumentasi
                                    teknis</span>
                            </li>
                        </ul>
                        <div class="mb-5 bg-success/5 rounded-lg p-2.5 border border-success/10">
                            <p class="text-[11px] lg:text-xs font-mono font-semibold text-success mb-1">Debugging: 2
                                jam → 15 mnt</p>
                            <p class="text-[10px] lg:text-[11px] text-text-secondary flex items-center gap-1">
                                <i data-lucide="tag" class="w-3 h-3 text-success"></i> Diskon 50% Early Bird
                            </p>
                        </div>
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <div>
                                    <span class="text-[10px] text-text-secondary line-through block mb-0.5">Rp
                                        299.000</span>
                                    <span class="text-xl lg:text-2xl font-black text-text-primary">Rp 149.000</span>
                                </div>
                                <span class="px-2 py-1 rounded bg-border/30 text-[10px] font-bold text-text-primary">
                                    5 MODUL
                                </span>
                            </div>

                            <a href="#"
                                class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-primary hover:opacity-90 transition-all duration-300 shadow-md shadow-primary/20 hover:-translate-y-0.5">
                                BELI KELAS
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    <div class="p-4 border-b border-border/50 flex justify-between items-center bg-background/50">
                        <span
                            class="px-2.5 py-1 rounded-md bg-success/10 text-success text-[10px] font-bold uppercase tracking-wider">
                            Terbaru
                        </span>
                        <div class="text-right">
                            <span class="text-[10px] text-text-secondary line-through">Rp 299k</span>
                            <span class="text-sm font-bold text-secondary ml-1">Rp 149k</span>
                        </div>
                    </div>
                    <div class="p-4 lg:p-5 flex flex-col flex-grow">
                        <h3 class="text-base lg:text-lg font-bold text-text-primary leading-tight mb-1">Gemini for
                            Marketer</h3>
                        <p class="text-[11px] lg:text-xs text-text-secondary mb-4">Digital marketer, copywriter, SEO
                        </p>
                        <div class="flex flex-col gap-1.5 mb-4 pb-4 border-b border-border/50">
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-success"></i>
                                <span class="text-[11px] lg:text-xs text-text-secondary">Foundation & Akses Seumur
                                    Hidup</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4 flex-grow">

                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-secondary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Content calendar
                                    generation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-secondary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">SEO
                                    optimization</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-secondary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Ad copy
                                    variations</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-secondary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Market
                                    research</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-secondary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Email marketing
                                    automation</span>
                            </li>
                        </ul>
                        <div class="mb-5 bg-success/5 rounded-lg p-2.5 border border-success/10">
                            <p class="text-[11px] lg:text-xs font-mono font-semibold text-success mb-1">Riset konten: 3
                                hari → 1 jam</p>
                            <p class="text-[10px] lg:text-[11px] text-text-secondary flex items-center gap-1">
                                <i data-lucide="tag" class="w-3 h-3 text-success"></i> Diskon 50% Early Bird
                            </p>
                        </div>
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <div>
                                    <span class="text-[10px] text-text-secondary line-through block mb-0.5">Rp
                                        299.000</span>
                                    <span class="text-xl lg:text-2xl font-black text-text-primary">Rp 149.000</span>
                                </div>
                                <span class="px-2 py-1 rounded bg-border/30 text-[10px] font-bold text-text-primary">
                                    4 MODUL
                                </span>
                            </div>

                            <a href="#"
                                class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-secondary hover:opacity-90 transition-all duration-300 shadow-md shadow-secondary/20 hover:-translate-y-0.5">
                                BELI KELAS
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    <div class="p-4 border-b border-border/50 flex justify-between items-center bg-background/50">
                        <span
                            class="px-2.5 py-1 rounded-md bg-accent/10 text-accent text-[10px] font-bold uppercase tracking-wider">
                            Rekomendasi
                        </span>
                        <div class="text-right">
                            <span class="text-[10px] text-text-secondary line-through">Rp 349k</span>
                            <span class="text-sm font-bold text-accent ml-1">Rp 179k</span>
                        </div>
                    </div>
                    <div class="p-4 lg:p-5 flex flex-col flex-grow">
                        <h3 class="text-base lg:text-lg font-bold text-text-primary leading-tight mb-1">Gemini for
                            Analyst</h3>
                        <p class="text-[11px] lg:text-xs text-text-secondary mb-4">Data analyst, BI, product manager
                        </p>
                        <div class="flex flex-col gap-1.5 mb-4 pb-4 border-b border-border/50">
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-success"></i>
                                <span class="text-[11px] lg:text-xs text-text-secondary">Foundation & Akses Seumur
                                    Hidup</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4 flex-grow">

                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-accent shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">SQL query
                                    generation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-accent shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Data cleaning
                                    automation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-accent shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Insight
                                    extraction</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-accent shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Chart
                                    recommendations</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-accent shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Report
                                    drafting</span>
                            </li>
                        </ul>
                        <div class="mb-5 bg-success/5 rounded-lg p-2.5 border border-success/10">
                            <p class="text-[11px] lg:text-xs font-mono font-semibold text-success mb-1">Report mingguan
                                → 5 menit</p>
                            <p class="text-[10px] lg:text-[11px] text-text-secondary flex items-center gap-1">
                                <i data-lucide="tag" class="w-3 h-3 text-success"></i> Diskon 48% Khusus Batch 1
                            </p>
                        </div>
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <div>
                                    <span class="text-[10px] text-text-secondary line-through block mb-0.5">Rp
                                        349.000</span>
                                    <span class="text-xl lg:text-2xl font-black text-text-primary">Rp 179.000</span>
                                </div>
                                <span class="px-2 py-1 rounded bg-border/30 text-[10px] font-bold text-text-primary">
                                    6 MODUL
                                </span>
                            </div>

                            <a href="#"
                                class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-accent hover:opacity-90 transition-all duration-300 shadow-md shadow-accent/20 hover:-translate-y-0.5">
                                BELI KELAS
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    <div class="p-4 border-b border-border/50 flex justify-between items-center bg-background/50">
                        <span
                            class="px-2.5 py-1 rounded-md bg-error/10 text-error text-[10px] font-bold uppercase tracking-wider">
                            Paling Laris
                        </span>
                        <div class="text-right">
                            <span class="text-[10px] text-text-secondary line-through">Rp 249k</span>
                            <span class="text-sm font-bold text-primary ml-1">Rp 129k</span>
                        </div>
                    </div>
                    <div class="p-4 lg:p-5 flex flex-col flex-grow">
                        <h3 class="text-base lg:text-lg font-bold text-text-primary leading-tight mb-1">Gemini for
                            Creator</h3>
                        <p class="text-[11px] lg:text-xs text-text-secondary mb-4">Content creator, YouTuber, SMM</p>
                        <div class="flex flex-col gap-1.5 mb-4 pb-4 border-b border-border/50">
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-success"></i>
                                <span class="text-[11px] lg:text-xs text-text-secondary">Foundation & Akses Seumur
                                    Hidup</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4 flex-grow">

                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Video script
                                    writing</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Hook & CTA
                                    generation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Content
                                    ideation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Posting
                                    schedule</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <div class="w-1.5 h-1.5 rounded-sm bg-primary shrink-0 mt-1 shadow-sm"></div>
                                <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">Trend
                                    analysis</span>
                            </li>
                        </ul>
                        <div class="mb-5 bg-success/5 rounded-lg p-2.5 border border-success/10">
                            <p class="text-[11px] lg:text-xs font-mono font-semibold text-success mb-1">Ide ngonten
                                sebulan → 10 mnt</p>
                            <p class="text-[10px] lg:text-[11px] text-text-secondary flex items-center gap-1">
                                <i data-lucide="tag" class="w-3 h-3 text-success"></i> Diskon 48% Early Bird
                            </p>
                        </div>
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <div>
                                    <span class="text-[10px] text-text-secondary line-through block mb-0.5">Rp
                                        249.000</span>
                                    <span class="text-xl lg:text-2xl font-black text-text-primary">Rp 129.000</span>
                                </div>
                                <span class="px-2 py-1 rounded bg-border/30 text-[10px] font-bold text-text-primary">
                                    4 MODUL
                                </span>
                            </div>

                            <a href="#"
                                class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-primary hover:opacity-90 transition-all duration-300 shadow-md shadow-primary/20 hover:-translate-y-0.5">
                                BELI KELAS
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================
         TUTOR SECTION
         ============================================ --}}
    <section id="tutor" class="py-20 lg:py-28 bg-gradient-to-b from-background to-surface relative">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-primary/3 rounded-full blur-[120px]">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-4">
                    <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                    Tim Pengajar
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Tutor <span class="gradient-text">Berpengalaman</span>
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Belajar langsung dari para praktisi dan ahli AI yang telah berpengalaman bertahun-tahun di industri
                    teknologi.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-56 gradient-bg overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-28 h-28 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center border-4 border-white/30">
                                <span class="text-4xl font-black text-white">AR</span>
                            </div>
                        </div>
                        <div
                            class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm text-white text-xs font-semibold">
                            8+ Tahun
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-text-primary mb-1">Ahmad Rizki, S.Kom</h3>
                        <p class="text-sm text-primary font-medium mb-3">AI Engineer & Google Cloud Expert</p>
                        <p class="text-sm text-text-secondary mb-4">Mantan engineer di perusahaan teknologi besar
                            dengan fokus di NLP dan Generative AI. Berpengalaman melatih 200+ profesional.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2.5 py-1 rounded-md bg-primary/5 text-primary text-xs font-medium">Gemini
                                API</span>
                            <span
                                class="px-2.5 py-1 rounded-md bg-secondary/5 text-secondary text-xs font-medium">Prompt
                                Eng.</span>
                            <span
                                class="px-2.5 py-1 rounded-md bg-accent/5 text-accent-dark text-xs font-medium">Python</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-primary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-primary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="github" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-primary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-56 bg-gradient-to-br from-secondary to-primary overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-28 h-28 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center border-4 border-white/30">
                                <span class="text-4xl font-black text-white">SP</span>
                            </div>
                        </div>
                        <div
                            class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm text-white text-xs font-semibold">
                            10+ Tahun
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-text-primary mb-1">Sarah Putri, M.Cs</h3>
                        <p class="text-sm text-secondary font-medium mb-3">Data Scientist & AI Researcher</p>
                        <p class="text-sm text-text-secondary mb-4">Peneliti AI di universitas terkemuka dengan 15+
                            publikasi internasional. Spesialis di bidang machine learning dan computer vision.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 rounded-md bg-secondary/5 text-secondary text-xs font-medium">ML/DL</span>
                            <span class="px-2.5 py-1 rounded-md bg-primary/5 text-primary text-xs font-medium">Data
                                Science</span>
                            <span
                                class="px-2.5 py-1 rounded-md bg-success/5 text-success text-xs font-medium">Research</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-secondary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-secondary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="github" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-secondary hover:text-white text-text-secondary transition-all">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="fade-in-up group bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-56 bg-gradient-to-br from-accent to-primary overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-28 h-28 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center border-4 border-white/30">
                                <span class="text-4xl font-black text-white">BW</span>
                            </div>
                        </div>
                        <div
                            class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm text-white text-xs font-semibold">
                            6+ Tahun
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-text-primary mb-1">Budi Wicaksono, S.T</h3>
                        <p class="text-sm text-accent-dark font-medium mb-3">Full-Stack Developer & AI Consultant</p>
                        <p class="text-sm text-text-secondary mb-4">Konsultan AI untuk startup dan enterprise. Ahli
                            integrasi Gemini API ke dalam aplikasi web dan mobile. 50+ project berhasil.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 rounded-md bg-accent/5 text-accent-dark text-xs font-medium">Full-Stack</span>
                            <span class="px-2.5 py-1 rounded-md bg-primary/5 text-primary text-xs font-medium">API
                                Integ.</span>
                            <span
                                class="px-2.5 py-1 rounded-md bg-warning/5 text-warning text-xs font-medium">Consulting</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-accent hover:text-white text-text-secondary transition-all">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-accent hover:text-white text-text-secondary transition-all">
                                <i data-lucide="github" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="w-9 h-9 rounded-lg bg-border/30 flex items-center justify-center hover:bg-accent hover:text-white text-text-secondary transition-all">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         CTA SECTION
         ============================================ --}}
    <section class="py-20 lg:py-28 relative overflow-hidden">
        <div class="absolute inset-0 gradient-bg opacity-95"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 32px 32px;">
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in-up">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6 leading-tight">
                Siap Menguasai <br class="hidden sm:block">Google Gemini?
            </h2>
            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto">
                Jangan tunda lagi! Bergabunglah dengan 500+ alumni yang sudah merasakan manfaat belajar di Master
                Gemini. Pendaftaran batch terbaru sudah dibuka.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#paket"
                    class="inline-flex items-center justify-center gap-2 px-10 py-4 rounded-2xl text-base font-bold text-primary bg-white hover:bg-gray-50 transition-all duration-300 shadow-xl hover:-translate-y-1">
                    <i data-lucide="rocket" class="w-5 h-5"></i>
                    Daftar Sekarang
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Master%20Gemini%2C%20saya%20ingin%20bertanya%20tentang%20kelas"
                    target="_blank"
                    class="inline-flex items-center justify-center gap-2 px-10 py-4 rounded-2xl text-base font-bold text-white bg-white/10 border-2 border-white/30 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 backdrop-blur-sm">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================
         FOOTER
         ============================================ --}}
    <footer class="bg-[#1A1F36] text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg>
                        </div>
                        <span class="text-xl font-bold">Master Gemini</span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed mb-6">
                        Platform belajar AI Gemini #1 di Indonesia. Kuasai teknologi masa depan bersama tutor
                        berpengalaman.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 rounded-xl bg-white/5 hover:bg-primary flex items-center justify-center transition-all duration-300">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-xl bg-white/5 hover:bg-primary flex items-center justify-center transition-all duration-300">
                            <i data-lucide="youtube" class="w-5 h-5"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-xl bg-white/5 hover:bg-primary flex items-center justify-center transition-all duration-300">
                            <i data-lucide="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-xl bg-white/5 hover:bg-primary flex items-center justify-center transition-all duration-300">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-sm uppercase tracking-wider mb-4 text-gray-300">Navigasi</h4>
                    <ul class="space-y-3">
                        <li><a href="#hero"
                                class="text-sm text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#keunggulan"
                                class="text-sm text-gray-400 hover:text-white transition-colors">Keunggulan</a></li>
                        <li><a href="#tutor"
                                class="text-sm text-gray-400 hover:text-white transition-colors">Tutor</a></li>
                        <li><a href="#paket" class="text-sm text-gray-400 hover:text-white transition-colors">Paket &
                                Harga</a></li>
                        <li><a href="#testimoni"
                                class="text-sm text-gray-400 hover:text-white transition-colors">Testimoni</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-sm uppercase tracking-wider mb-4 text-gray-300">Sumber Daya</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Blog &
                                Artikel</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Free
                                Tutorial</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">FAQ</a>
                        </li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Syarat
                                & Ketentuan</a></li>
                        <li><a href="#"
                                class="text-sm text-gray-400 hover:text-white transition-colors">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-sm uppercase tracking-wider mb-4 text-gray-300">Hubungi Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-4 h-4 text-primary"></i>
                            <a href="mailto:hello@mastergemini.id"
                                class="text-sm text-gray-400 hover:text-white transition-colors">hello@mastergemini.id</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-4 h-4 text-primary"></i>
                            <a href="tel:+6281234567890"
                                class="text-sm text-gray-400 hover:text-white transition-colors">+62 812-3456-7890</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-4 h-4 text-primary mt-0.5"></i>
                            <span class="text-sm text-gray-400">Jakarta, Indonesia</span>
                        </li>
                    </ul>

                    <div class="mt-6">
                        <p class="text-sm text-gray-300 font-medium mb-3">Dapatkan tips AI gratis:</p>
                        <form class="flex gap-2">
                            <input type="email" placeholder="Email Anda..."
                                class="flex-1 px-4 py-2.5 rounded-xl bg-white/5 border border-white/10 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-primary transition-colors">
                            <button type="submit"
                                class="px-4 py-2.5 rounded-xl gradient-bg text-sm font-semibold hover:opacity-90 transition-opacity">
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-500">© {{ date('Y') }} Master Gemini. All rights reserved.</p>
                <p class="text-sm text-gray-500">Dibuat dengan <span class="text-error">❤</span> di Indonesia 🇮🇩</p>
            </div>
        </div>
    </footer>

    {{-- ============================================
         WHATSAPP FLOATING BUTTON
         ============================================ --}}
    <a href="https://wa.me/6281234567890?text=Halo%20Master%20Gemini%2C%20saya%20ingin%20bertanya%20tentang%20kelas"
        target="_blank" id="wa-button"
        class="fixed bottom-6 right-6 z-50 w-16 h-16 rounded-full bg-[#25D366] flex items-center justify-center shadow-2xl shadow-[#25D366]/30 hover:scale-110 hover:shadow-[#25D366]/50 transition-all duration-300 wa-float group"
        aria-label="Hubungi kami via WhatsApp">
        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>

        <span
            class="absolute right-20 top-1/2 -translate-y-1/2 px-4 py-2 rounded-xl bg-[#1A1F36] text-white text-sm font-medium whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-xl pointer-events-none">
            Chat via WhatsApp 💬
        </span>
    </a>

    {{-- ============================================
         JAVASCRIPT
         ============================================ --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Lucide Icons
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // ==============================
            // Navbar scroll effect
            // ==============================
            const navbar = document.getElementById('navbar');
            const handleScroll = () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('glass', 'shadow-sm');
                } else {
                    navbar.classList.remove('glass', 'shadow-sm');
                }
            };
            window.addEventListener('scroll', handleScroll, {
                passive: true
            });
            handleScroll();

            // ==============================
            // Mobile menu toggle
            // ==============================
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
                // Close on link click
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
                });
            }

            // ==============================
            // Counter animation
            // ==============================
            const counters = document.querySelectorAll('[data-count]');
            const animateCounter = (el) => {
                const target = parseInt(el.dataset.count);
                const duration = 2000;
                const startTime = performance.now();

                const update = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
                    const current = Math.floor(eased * target);
                    el.textContent = current + '+';
                    if (progress < 1) requestAnimationFrame(update);
                };
                requestAnimationFrame(update);
            };

            // ==============================
            // Intersection Observer for animations
            // ==============================
            // Only use IO fallback if scroll-driven animations aren't supported
            const hasScrollAnimations = CSS.supports?.('(animation-timeline: view()) and (animation-range: entry)');

            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');

                        // Trigger counter animation
                        if (entry.target.hasAttribute('data-count')) {
                            animateCounter(entry.target);
                        }

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
                observer.observe(el);
            });

            // Observe counters
            counters.forEach(el => observer.observe(el));

            // ==============================
            // Smooth scroll for anchor links
            // ==============================
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const navHeight = navbar.offsetHeight;
                        const targetPosition = target.getBoundingClientRect().top + window
                            .pageYOffset - navHeight;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // ==============================
            // Active nav link highlighting
            // ==============================
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            const highlightNav = () => {
                const scrollPos = window.scrollY + 100;
                sections.forEach(section => {
                    const top = section.offsetTop;
                    const height = section.offsetHeight;
                    const id = section.getAttribute('id');

                    if (scrollPos >= top && scrollPos < top + height) {
                        navLinks.forEach(link => {
                            link.classList.remove('text-primary', 'font-semibold');
                            link.classList.add('text-text-secondary');
                            if (link.getAttribute('href') === `#${id}`) {
                                link.classList.add('text-primary', 'font-semibold');
                                link.classList.remove('text-text-secondary');
                            }
                        });
                    }
                });
            };
            window.addEventListener('scroll', highlightNav, {
                passive: true
            });
        });
    </script>
</body>

</html>
