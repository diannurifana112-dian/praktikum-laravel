
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Surat')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-purple-50 min-h-screen">

    <header class="bg-gradient-to-r from-purple-700 to-indigo-600 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-6 py-5 flex flex-col md:flex-row justify-between items-center gap-4">

            <h2 class="text-2xl font-bold">
                Sistem Informasi Surat
            </h2>

            <nav class="flex gap-3 flex-wrap justify-center">
                <a href="{{ route('dashboard') }}"
                   class="px-4 py-2 rounded-lg hover:bg-white hover:text-purple-700 transition">
                    Dashboard
                </a>

                <a href="{{ route('surat-masuk.index') }}"
                   class="px-4 py-2 rounded-lg hover:bg-white hover:text-purple-700 transition">
                    Surat Masuk
                </a>

                <a href="{{ route('surat-keluar.index') }}"
                   class="px-4 py-2 rounded-lg hover:bg-white hover:text-purple-700 transition">
                    Surat Keluar
                </a>
            </nav>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
