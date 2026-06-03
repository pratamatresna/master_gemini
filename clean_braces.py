with open('resources/views/landing.blade.php', 'r') as f:
    lines = f.readlines()

new_lines = []
skip_next = False
for i in range(len(lines)):
    if skip_next:
        skip_next = False
        continue
    
    line = lines[i].strip()
    
    if i < len(lines) - 1:
        next_line = lines[i+1].strip()
        if line == '{' and next_line == '}':
            skip_next = True
            continue
            
    new_lines.append(lines[i])

with open('resources/views/landing.blade.php', 'w') as f:
    f.writelines(new_lines)

print("Cleaned up orphaned braces")
