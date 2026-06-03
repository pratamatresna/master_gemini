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

    
    @include('components.layout.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.layout.footer')
    @include('components.ui.whatsapp-button')
    @include('components.layout.scripts')

</body>
</html>
