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


    