<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-300 max-w-[450px] mx-auto">
    <div class="bg-gray-50 text-black">
        <div class="min-h-screen flex flex-col">
            @include('includes.navigation')

            <main class="w-full px-6 mt-6">
                @yield('section')
            </main>

            <footer class="py-6 mt-auto bg-white text-center text-sm text-black">
                <p>your footer here</p>
            </footer>
        </div>
    </div>
</body>

</html>
