<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Meu Projeto' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-zinc-950 text-white min-h-screen flex flex-col">

    <livewire:components.navbar />

    <main class="flex-1 w-full max-w-6xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

    <livewire:components.footer />

    @livewireScripts
</body>

</html>
