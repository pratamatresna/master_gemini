import re

css_path = 'resources/css/app.css'
with open(css_path, 'r') as f:
    css_content = f.read()

# Add Google colors
css_content = css_content.replace('--color-accent-dark: #00A3D9;', '--color-accent-dark: #00A3D9;\n    --color-google-red: #EA4335;\n    --color-google-yellow: #FBBC05;\n    --color-google-green: #34A853;')

# Modify gradient-text
css_content = re.sub(
    r'\.gradient-text\s*\{\s*background:\s*linear-gradient\([^;]+;\s*-webkit-background-clip:\s*text;',
    r'.gradient-text {\n    background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-google-red) 33%, var(--color-google-yellow) 66%, var(--color-google-green) 100%);\n    -webkit-background-clip: text;',
    css_content
)

# Add marquee CSS
marquee_css = """
/* Marquee animation (Right) */
@keyframes marquee-right {
    0% { transform: translateX(0%); }
    100% { transform: translateX(-50%); }
}

.animate-marquee-right {
    animation: marquee-right 40s linear infinite;
    display: flex;
    width: max-content;
}
.animate-marquee-right:hover {
    animation-play-state: paused;
}
"""
css_content += marquee_css

with open(css_path, 'w') as f:
    f.write(css_content)

html_path = 'resources/views/landing.blade.php'
with open(html_path, 'r') as f:
    html_content = f.read()

# Extract Testimonial Section
testi_start = html_content.find('    {{-- ============================================\n         TESTIMONIAL SECTION')
testi_end = html_content.find('    </section>', testi_start) + 14

testi_original = html_content[testi_start:testi_end]

# Modify Testimonial to Marquee
testi_marquee = testi_original.replace(
    'class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children"',
    'class="animate-marquee-right gap-6 px-4"'
)
testi_marquee = testi_marquee.replace(
    'class="fade-in-up bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300"',
    'class="w-[350px] shrink-0 bg-surface rounded-2xl border border-border p-6 hover:shadow-lg transition-all duration-300"'
)
testi_marquee = testi_marquee.replace(
    '<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">',
    '<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">'
)

# Enclose cards in @for loop and a flex container mask
grid_start = testi_marquee.find('<div class="animate-marquee-right')
grid_end = testi_marquee.find('</div>\n        </div>\n    </section>') # We have to be careful

# Actually, let's manually rebuild the marquee part using regex
import re
cards_raw = re.findall(r'(<div class="w-\[350px\].*?</div>\n                </div>)', testi_marquee, re.DOTALL)
if not cards_raw:
    # the replace might have changed indentation
    cards_raw = re.findall(r'(<div class="w-\[350px\].*?</div>\n\s{16}</div>)', testi_marquee, re.DOTALL)

cards_str = "\n".join(cards_raw)

# Replace the grid with our marquee wrapper
wrapper = f"""
        {{-- Testimonial Marquee --}}
        <div class="relative w-full overflow-hidden flex group" style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
            <div class="animate-marquee-right gap-6 py-4">
                @for ($i = 0; $i < 2; $i++)
{cards_str}
                @endfor
            </div>
        </div>
"""

testi_marquee = re.sub(r'            \{\{-- Testimonial Grid --\}\}.*?</div>\n        </div>', wrapper + '\n        </div>', testi_marquee, flags=re.DOTALL)

# Delete from old location
html_content = html_content[:testi_start] + html_content[testi_end:]

# Insert after Hero
hero_end = html_content.find('    </section>', html_content.find('HERO SECTION')) + 14
html_content = html_content[:hero_end] + '\n\n' + testi_marquee + html_content[hero_end:]

with open(html_path, 'w') as f:
    f.write(html_content)

print("Done rewrite")
