import re

with open('resources/views/landing.blade.php', 'r') as f:
    html = f.read()

# 1. We will replace the entire PRODUK COURSE SECTION with a better one.
# Let's find it.
course_start = html.find('    {{-- ============================================\n         PRODUK COURSE SECTION')
tutor_start = html.find('    {{-- ============================================\n         TUTOR SECTION')

if course_start == -1 or tutor_start == -1:
    print("Error finding sections")
    exit(1)

course_old = html[course_start:tutor_start]

# 2. Build the NEW "Hasil Produk" section
hasil_html = """    {{-- ============================================
         HASIL PRODUK / SHOWCASE SECTION
         ============================================ --}}
    <section id="showcase" class="py-20 lg:py-28 relative bg-gradient-to-b from-background to-surface border-y border-border">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 text-secondary text-sm font-semibold mb-4">
                    <i data-lucide="layers" class="w-4 h-4"></i>
                    Showcase Project
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Hasil <span class="gradient-text">Produk</span> Course
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Beberapa contoh aplikasi dan automasi nyata yang akan Anda pelajari dan bangun sendiri selama mengikuti kelas ini.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 stagger-children">
                {{-- Product 1 --}}
                <div class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 bg-gray-50 border-b border-border p-4 relative overflow-hidden">
                        {{-- Chat UI Mockup --}}
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9IiNlMmU4ZjAiLz48L3N2Zz4=')] opacity-50"></div>
                        <div class="relative w-full h-full bg-white rounded-xl shadow-sm border border-border/50 p-4 flex flex-col gap-3 group-hover:scale-105 transition-transform duration-500">
                            <div class="w-3/4 h-8 bg-gray-100 rounded-lg self-start flex items-center px-3"><div class="w-2 h-2 rounded-full bg-gray-300"></div></div>
                            <div class="w-2/3 h-12 bg-primary/10 rounded-lg self-end flex items-center justify-end px-3 border border-primary/20"><div class="w-16 h-2 rounded-full bg-primary/40"></div></div>
                            <div class="w-5/6 h-8 bg-gray-100 rounded-lg self-start flex items-center px-3"><div class="w-12 h-2 rounded-full bg-gray-300"></div></div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider">Customer Service</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">Automated AI Chatbot</h3>
                        <p class="text-sm text-text-secondary">Membangun sistem CS otomatis berbasis RAG (Retrieval-Augmented Generation) yang mampu menjawab keluhan pelanggan berdasarkan dokumen perusahaan.</p>
                    </div>
                </div>

                {{-- Product 2 --}}
                <div class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 bg-[#1A1F36] border-b border-border p-4 relative overflow-hidden flex items-center justify-center">
                        {{-- Code UI Mockup --}}
                        <div class="w-full h-full bg-black/40 rounded-xl shadow-inner border border-white/10 p-4 font-mono text-[10px] text-gray-400 group-hover:scale-105 transition-transform duration-500 flex flex-col justify-center">
                            <p><span class="text-secondary-light">async def</span> <span class="text-accent">generate_report</span>(data):</p>
                            <p class="pl-4"><span class="text-gray-500"># Gemini analyzes the sales data</span></p>
                            <p class="pl-4">prompt = <span class="text-success">f"Analyze {{data}}"</span></p>
                            <p class="pl-4">res = <span class="text-primary-light">await</span> model.generate(prompt)</p>
                            <p class="pl-4"><span class="text-secondary-light">return</span> res.text</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2.5 py-1 rounded-md bg-secondary/10 text-secondary text-[10px] font-bold uppercase tracking-wider">Data Pipeline</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">Smart Report Generator</h3>
                        <p class="text-sm text-text-secondary">Script Python yang otomatis menarik data dari database, dianalisis oleh Gemini, dan di-export menjadi laporan PDF mingguan.</p>
                    </div>
                </div>

                {{-- Product 3 --}}
                <div class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="h-48 bg-gradient-to-br from-accent/20 to-primary/20 border-b border-border p-4 relative overflow-hidden flex items-center justify-center">
                        {{-- Dashboard UI Mockup --}}
                        <div class="w-full h-full bg-white/60 backdrop-blur-md rounded-xl shadow-sm border border-white p-3 flex flex-col gap-2 group-hover:scale-105 transition-transform duration-500">
                            <div class="flex gap-2">
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                                <div class="w-1/3 h-12 bg-white rounded-lg shadow-sm border border-border/50"></div>
                            </div>
                            <div class="flex-grow bg-white rounded-lg shadow-sm border border-border/50 p-2 flex items-end gap-2">
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
                            <span class="px-2.5 py-1 rounded-md bg-accent/10 text-accent-dark text-[10px] font-bold uppercase tracking-wider">Marketing</span>
                        </div>
                        <h3 class="text-lg font-bold text-text-primary mb-2">SEO Content Dashboard</h3>
                        <p class="text-sm text-text-secondary">Dashboard interaktif (Next.js) untuk generate artikel blog SEO-friendly, meta tag, dan visualisasi trend menggunakan Gemini API.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

"""

# 3. Build the NEW and FIXED "Produk Course" section
course_new_html = """    {{-- ============================================
         PRODUK COURSE SECTION
         ============================================ --}}
    <section id="paket" class="py-20 lg:py-28 relative bg-surface">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-4">
                    <i data-lucide="book-open" class="w-4 h-4"></i>
                    Pilih Kelas
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary mb-4">
                    Paket <span class="gradient-text">Course</span>
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Pilih materi yang spesifik untuk keahlian Anda.
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 lg:gap-8 stagger-children">
"""

cards_data = [
    {
        "badge": "Terpopuler",
        "badge_color": "warning",
        "title": "Gemini for Developer",
        "subtitle": "Software developer, engineer, tech lead",
        "price_strike": "299k",
        "price_real_sm": "149k",
        "price_real": "149.000",
        "price_strike_full": "299.000",
        "points": [
            "Code review automation",
            "Debugging assistant",
            "Unit test generation",
            "Prototyping cepat",
            "Dokumentasi teknis"
        ],
        "highlight": "Debugging dari 2 jam → 15 menit",
        "promo": "Diskon 50% Early Bird",
        "modules": "5 MODUL",
        "btn_color": "primary"
    },
    {
        "badge": "Terbaru",
        "badge_color": "success",
        "title": "Gemini for Marketer",
        "subtitle": "Digital marketer, copywriter, SEO",
        "price_strike": "299k",
        "price_real_sm": "149k",
        "price_real": "149.000",
        "price_strike_full": "299.000",
        "points": [
            "Content calendar generation",
            "SEO optimization",
            "Ad copy variations",
            "Market research",
            "Email marketing automation"
        ],
        "highlight": "Riset konten 3 hari → 1 jam",
        "promo": "Diskon 50% Early Bird",
        "modules": "4 MODUL",
        "btn_color": "secondary"
    },
    {
        "badge": "Rekomendasi",
        "badge_color": "accent",
        "title": "Gemini for Analyst",
        "subtitle": "Data analyst, BI, product manager",
        "price_strike": "349k",
        "price_real_sm": "179k",
        "price_real": "179.000",
        "price_strike_full": "349.000",
        "points": [
            "SQL query generation",
            "Data cleaning automation",
            "Insight extraction",
            "Chart recommendations",
            "Report drafting"
        ],
        "highlight": "Bikin report mingguan → 5 menit",
        "promo": "Diskon 48% Khusus Batch 1",
        "modules": "6 MODUL",
        "btn_color": "accent"
    },
    {
        "badge": "Paling Laris",
        "badge_color": "error",
        "title": "Gemini for Creator",
        "subtitle": "Content creator, YouTuber, SMM",
        "price_strike": "249k",
        "price_real_sm": "129k",
        "price_real": "129.000",
        "price_strike_full": "249.000",
        "points": [
            "Video script writing",
            "Hook & CTA generation",
            "Content ideation",
            "Posting schedule",
            "Trend analysis"
        ],
        "highlight": "Ide ngonten sebulan → 10 menit",
        "promo": "Diskon 48% Early Bird",
        "modules": "4 MODUL",
        "btn_color": "primary"
    }
]

for card in cards_data:
    points_html = "".join([f"""
                        <li class="flex items-start gap-3">
                            <div class="w-2.5 h-2.5 rounded-sm bg-{card['btn_color']} shrink-0 mt-1 shadow-sm shadow-{card['btn_color']}/20"></div>
                            <span class="text-sm text-text-primary font-medium">{p}</span>
                        </li>""" for p in card['points']])
    
    # We use a cream/beige background "#FCF5E5" like the image, but integrated with tailwind gracefully.
    # To use arbitrary colors in tailwind v4, we just use the hex `bg-[#FCF5E5]`.
    card_html = f"""
                <div class="fade-in-up bg-[#FFFBF2] rounded-xl border-[3px] border-[#1A1F36] overflow-hidden flex flex-col shadow-[6px_6px_0px_#1A1F36] hover:-translate-y-1 hover:shadow-[8px_8px_0px_#1A1F36] transition-all duration-300 relative group">
                    
                    {{-- Top Area --}}
                    <div class="p-6 pb-4 border-b-2 border-[#1A1F36]/10 flex-grow flex flex-col">
                        
                        {{-- Top Badge & Mini Price --}}
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 bg-white border-2 border-[#1A1F36] text-[#1A1F36] text-xs font-bold shadow-[2px_2px_0px_#1A1F36]">
                                {card['badge']}
                            </span>
                            <div class="bg-white border-2 border-[#1A1F36] px-3 py-1 flex items-center gap-2 shadow-[2px_2px_0px_#1A1F36]">
                                <span class="text-sm font-bold text-[#E67E22]">Rp {card['price_real_sm']}</span>
                                <span class="text-xs text-text-secondary line-through">{card['price_strike']}</span>
                            </div>
                        </div>

                        {{-- Title & Subtitle --}}
                        <h3 class="text-2xl font-black text-text-primary mb-2 leading-tight">{card['title']}</h3>
                        <p class="text-sm text-text-secondary mb-6 font-medium">{card['subtitle']}</p>

                        {{-- Foundation Checks --}}
                        <div class="flex flex-col gap-2.5 mb-6 pb-6 border-b-2 border-[#1A1F36]/10">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check" class="w-5 h-5 text-success"></i>
                                <span class="text-sm text-text-secondary font-medium">Sudah termasuk materi Foundation</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-5 h-5 text-success"></i>
                                    <span class="text-sm text-text-secondary font-medium">Akses seumur hidup</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-5 h-5 text-success"></i>
                                    <span class="text-sm text-text-secondary font-medium">Lifetime update</span>
                                </div>
                            </div>
                        </div>

                        {{-- Square Bullets --}}
                        <ul class="space-y-4 mb-4 flex-grow">
                            {points_html}
                        </ul>
                    </div>

                    {{-- Bottom Area --}}
                    <div class="p-6 pt-4 bg-[#FFFBF2]">
                        
                        {{-- Highlights --}}
                        <div class="mb-6">
                            <p class="text-[15px] font-mono font-bold text-success mb-3">{card['highlight']}</p>
                            <div class="flex items-start gap-2">
                                <i data-lucide="check" class="w-5 h-5 text-success shrink-0"></i>
                                <span class="text-sm text-text-secondary font-medium leading-snug">{card['promo']}</span>
                            </div>
                        </div>

                        {{-- Bottom Price --}}
                        <div class="flex items-end justify-between mb-6">
                            <div>
                                <span class="text-3xl font-black text-text-primary tracking-tight">Rp {card['price_real']}</span>
                                <span class="inline-block text-base text-text-secondary line-through ml-2 font-bold">Rp {card['price_strike_full']}</span>
                            </div>
                            <div class="px-3 py-2 border-2 border-[#1A1F36] bg-[#FFFBF2] text-xs font-bold text-text-primary tracking-widest shadow-[2px_2px_0px_#1A1F36]">
                                {card['modules']}
                            </div>
                        </div>

                        {{-- Button --}}
                        <a href="#" class="block w-full py-4 text-center text-lg font-black text-white bg-[#E67E22] border-[3px] border-[#1A1F36] shadow-[4px_4px_0px_#1A1F36] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_#1A1F36] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all">
                            BELI KELAS
                        </a>
                    </div>
                </div>
"""
    course_new_html += card_html

course_new_html += """
            </div>
        </div>
    </section>
"""

new_html = html[:course_start] + hasil_html + '\n' + course_new_html + '\n' + html[tutor_start:]

with open('resources/views/landing.blade.php', 'w') as f:
    f.write(new_html)

print("Rewrite successful")
