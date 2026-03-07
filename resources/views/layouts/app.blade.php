<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produtos criados com impressão 3D: peças decorativas, chaveiros, miniaturas e itens personalizados. Conheça a Origem 3D.">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Origem 3D">
    <meta property="og:description" content="Produtos personalizados feitos com impressão 3D.">
    <!-- Ajustar url -->
    <meta property="og:image" content="https://seusite.com/images/printbanner_1.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <title>{{ $title ?? 'Origem 3D' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col">

    <main>
        {{ $slot }}
    </main>

    <livewire:components.footer />

    @livewireScripts
</body>

</html>