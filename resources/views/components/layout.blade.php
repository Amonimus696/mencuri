<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SMK Negeri 2 Yogyakarta | The Industrial Culture School' }}</title>
    <meta name="description" content="Website Resmi SMK Negeri 2 Yogyakarta — Eks. Princess Juliana School. Lembaga pendidikan vokasi bertaraf internasional yang menghasilkan lulusan kompeten, berkarakter, dan berdaya saing global.">
    <meta name="theme-color" content="#020617">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layout.navbar />

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>
</html>
