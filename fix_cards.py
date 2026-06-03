import re

with open('resources/views/landing.blade.php', 'r') as f:
    html = f.read()

course_start = html.find('    {{-- ============================================\n         PRODUK COURSE SECTION')
tutor_start = html.find('    {{-- ============================================\n         TUTOR SECTION')

course_new_html = """    {{-- ============================================
         PRODUK COURSE SECTION
         ============================================ --}}
    <section id="paket" class="py-16 lg:py-20 relative bg-surface">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 fade-in-up">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">
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
        "highlight": "Debugging: 2 jam → 15 mnt",
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
        "highlight": "Riset konten: 3 hari → 1 jam",
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
        "highlight": "Report mingguan → 5 menit",
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
        "highlight": "Ide ngonten sebulan → 10 mnt",
        "promo": "Diskon 48% Early Bird",
        "modules": "4 MODUL",
        "btn_color": "primary"
    }
]

for card in cards_data:
    points_html = "".join([f"""
                        <li class="flex items-start gap-2">
                            <div class="w-1.5 h-1.5 rounded-sm bg-{card['btn_color']} shrink-0 mt-1 shadow-sm"></div>
                            <span class="text-[11px] lg:text-xs text-text-secondary leading-tight">{p}</span>
                        </li>""" for p in card['points']])
    
    card_html = f"""
                <div class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    {{-- Compact Top --}}
                    <div class="p-4 border-b border-border/50 flex justify-between items-center bg-background/50">
                        <span class="px-2.5 py-1 rounded-md bg-{card['badge_color']}/10 text-{card['badge_color']} text-[10px] font-bold uppercase tracking-wider">
                            {card['badge']}
                        </span>
                        <div class="text-right">
                            <span class="text-[10px] text-text-secondary line-through">Rp {card['price_strike']}</span>
                            <span class="text-sm font-bold text-{card['btn_color']} ml-1">Rp {card['price_real_sm']}</span>
                        </div>
                    </div>
                    
                    {{-- Content --}}
                    <div class="p-4 lg:p-5 flex flex-col flex-grow">
                        <h3 class="text-base lg:text-lg font-bold text-text-primary leading-tight mb-1">{card['title']}</h3>
                        <p class="text-[11px] lg:text-xs text-text-secondary mb-4">{card['subtitle']}</p>
                        
                        {{-- Foundation Checks --}}
                        <div class="flex flex-col gap-1.5 mb-4 pb-4 border-b border-border/50">
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-success"></i>
                                <span class="text-[11px] lg:text-xs text-text-secondary">Foundation & Akses Seumur Hidup</span>
                            </div>
                        </div>

                        {{-- Square Bullets --}}
                        <ul class="space-y-2 mb-4 flex-grow">
                            {points_html}
                        </ul>

                        {{-- Highlights --}}
                        <div class="mb-5 bg-success/5 rounded-lg p-2.5 border border-success/10">
                            <p class="text-[11px] lg:text-xs font-mono font-semibold text-success mb-1">{card['highlight']}</p>
                            <p class="text-[10px] lg:text-[11px] text-text-secondary flex items-center gap-1">
                                <i data-lucide="tag" class="w-3 h-3 text-success"></i> {card['promo']}
                            </p>
                        </div>

                        {{-- Bottom Price & Button --}}
                        <div class="mt-auto">
                            <div class="flex justify-between items-end mb-4">
                                <div>
                                    <span class="text-[10px] text-text-secondary line-through block mb-0.5">Rp {card['price_strike_full']}</span>
                                    <span class="text-xl lg:text-2xl font-black text-text-primary">Rp {card['price_real']}</span>
                                </div>
                                <span class="px-2 py-1 rounded bg-border/30 text-[10px] font-bold text-text-primary">
                                    {card['modules']}
                                </span>
                            </div>
                            
                            <a href="#" class="block w-full py-3 rounded-xl text-center text-xs font-bold text-white bg-{card['btn_color']} hover:opacity-90 transition-all duration-300 shadow-md shadow-{card['btn_color']}/20 hover:-translate-y-0.5">
                                BELI KELAS
                            </a>
                        </div>
                    </div>
                </div>
"""
    course_new_html += card_html

course_new_html += """
            </div>
        </div>
    </section>
"""

new_html = html[:course_start] + course_new_html + '\n' + html[tutor_start:]

with open('resources/views/landing.blade.php', 'w') as f:
    f.write(new_html)

print("Cards rewritten successfully")
