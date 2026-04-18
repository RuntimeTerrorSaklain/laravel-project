@props(['title' => 'Homify', 'site' => []])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet">
    @vite(['resources/js/app.jsx'])
</head>
<body class="min-h-screen bg-surface font-body text-on-surface antialiased">
    <x-stitch.navbar :nav="$site['nav'] ?? []" :brand="$site['brand']['name'] ?? 'Homify'" />

    <main class="relative isolate overflow-hidden pb-14 pt-36 md:pt-28">
        <div class="pointer-events-none absolute inset-y-0 right-0 -z-10 hidden w-[28%] translate-x-1/3 -skew-x-12 bg-surface-container-low lg:block"></div>
        <div class="relative z-10">
            {{ $slot }}
        </div>
    </main>

    <x-stitch.footer
        :brand="$site['brand']['name'] ?? 'Homify'"
        :tagline="$site['brand']['tagline'] ?? ''"
        :nav="$site['nav'] ?? []"
        :regions="$site['regions'] ?? []"
    />
</body>
</html>
