<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="educación, academia, cursos,Academia Costarricense de Estudios Profesionales" name="keywords">
    <meta content="Academia Costarricense de Estudios Profesionales" name="description">
    <meta property="og:image" content="https://aceprocr.com/acepro-logo.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/images/acepro-icono.png" type="image/x-icon">
    <link rel="icon" href="/images/acepro-icono.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
  
    
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="bg-gray-200">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script>
        window.addEventListener('error', e => {
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Error en el proceso',
                text: e.detail.message,
                footer: '',
                showConfirmButton: false
            })

        });
        window.addEventListener('success', e => {
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Proceso Realizado',
                text: e.detail.message,
                footer: '',
                showConfirmButton: false
            })

        });
    </script>
</body>

</html>