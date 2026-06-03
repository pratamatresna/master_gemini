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

    