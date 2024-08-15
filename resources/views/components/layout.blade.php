<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Vite assets for CSS and JS -->
    @vite(['public/css/hero.css', 'public/js/hero.js', 'resources/css/app.css', 'resources/js/app.js', 'public/js/about.js'])

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/17353/17353894.png" type="image/x-icon" />

    <!-- Alpine.js for reactive UI components -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
<div class="min-h-full">
    <!-- Navbar Component -->
    <x-Navbar></x-Navbar>

    <!-- Header Component -->
    <x-header>{{ $title }}</x-header>

    <!-- Main Content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

<!-- Footer Component -->
<x-footer></x-footer>

</body>
</html>
