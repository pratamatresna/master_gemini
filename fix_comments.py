import re

with open('resources/views/landing.blade.php', 'r') as f:
    html = f.read()

# Remove the broken Python f-string escaped comments
# which look like {-- Compact Top --}
html = re.sub(r'\s*\{--.*?--\}\s*', '\n', html)

with open('resources/views/landing.blade.php', 'w') as f:
    f.write(html)

print("Comments fixed")
