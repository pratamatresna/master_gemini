import re

with open('resources/views/landing.blade.php', 'r') as f:
    html = f.read()

# Find indices
tutor_start = html.find('    {{-- ============================================\n         TUTOR SECTION')
paket_start = html.find('    {{-- ============================================\n         PRICING / PAKET SECTION')
cta_start = html.find('    {{-- ============================================\n         CTA SECTION')

tutor_html = html[tutor_start:paket_start]

course_html = """    {{-- ============================================
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
                    Produk <span class="gradient-text">Course</span>
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Materi komprehensif yang dirancang khusus untuk profesi Anda. Belajar lebih cepat, kerja lebih cerdas.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
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
        "btn_color": "accent-dark"
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
                            <div class="w-2 h-2 rounded-sm bg-{card['btn_color']} shrink-0 mt-1.5 shadow-sm shadow-{card['btn_color']}/30"></div>
                            <span class="text-sm text-text-secondary leading-tight">{p}</span>
                        </li>""" for p in card['points']])
    
    card_html = f"""
                <div class="fade-in-up bg-surface rounded-2xl border border-border overflow-hidden flex flex-col shadow-lg hover:shadow-2xl transition-all duration-300 relative group">
                    {{-- Top Badges & Mini Price --}}
                    <div class="flex justify-between items-center p-5 border-b border-border bg-background">
                        <span class="px-3 py-1 rounded-md bg-{card['badge_color']}/10 text-{card['badge_color']} text-xs font-bold border border-{card['badge_color']}/20">
                            {card['badge']}
                        </span>
                        <div class="text-right">
                            <div class="flex items-center gap-1.5 justify-end">
                                <span class="text-xs font-bold text-text-primary">Rp {card['price_real_sm']}</span>
                                <span class="text-[10px] text-text-secondary line-through">{card['price_strike']}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6 flex-grow flex flex-col bg-[#FFFDF9]">
                        <h3 class="text-xl font-bold text-text-primary mb-1">{card['title']}</h3>
                        <p class="text-xs text-text-secondary mb-6">{card['subtitle']}</p>

                        {{-- Foundation Checks --}}
                        <div class="grid grid-cols-1 gap-2.5 mb-6 pb-6 border-b border-border/50">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-success"></i>
                                <span class="text-xs text-text-secondary">Sudah termasuk materi Foundation</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-success"></i>
                                <span class="text-xs text-text-secondary">Akses seumur hidup & Lifetime update</span>
                            </div>
                        </div>

                        {{-- Square Bullets --}}
                        <ul class="space-y-3.5 mb-6 flex-grow">
                            {points_html}
                        </ul>

                        {{-- Divider --}}
                        <div class="w-full h-px bg-border my-5"></div>

                        {{-- Highlights --}}
                        <div class="mb-6">
                            <p class="text-sm font-mono font-medium text-success mb-3">{card['highlight']}</p>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check" class="w-4 h-4 text-success"></i>
                                <span class="text-xs text-text-secondary">{card['promo']}</span>
                            </div>
                        </div>

                        {{-- Bottom Price --}}
                        <div class="flex items-end justify-between mb-6 pt-2">
                            <div>
                                <span class="text-2xl sm:text-3xl font-black text-text-primary">Rp {card['price_real']}</span>
                                <span class="inline-block text-sm text-text-secondary line-through ml-2">Rp {card['price_strike_full']}</span>
                            </div>
                            <div class="px-3 py-2 rounded-md border-2 border-border bg-surface text-xs font-bold text-text-primary tracking-wider shadow-sm">
                                {card['modules']}
                            </div>
                        </div>

                        {{-- Button --}}
                        <a href="#" class="block w-full py-4 rounded-xl text-center text-sm font-bold text-white bg-{card['btn_color']} hover:opacity-90 transition-all duration-300 shadow-lg shadow-{card['btn_color']}/30 hover:-translate-y-0.5">
                            BELI KELAS
                        </a>
                    </div>
                </div>
"""
    course_html += card_html

course_html += """
            </div>
        </div>
    </section>
"""

new_html = html[:tutor_start] + course_html + '\n' + tutor_html + html[cta_start:]

with open('resources/views/landing.blade.php', 'w') as f:
    f.write(new_html)

print("Rewrite successful")
