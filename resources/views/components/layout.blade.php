<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Network</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-xl font-bold text-red-600">
                Laravel Network
            </h1>

            <div class="space-x-6">
                <a href="{{route('laravel.index')}}"
                   class="text-gray-700 hover:text-red-600 font-medium transition">
                    All Laravel
                </a>

                <a href="{{ route('laravel.create') }}"
                   class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                    Create New
                </a>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

</body>
</html>
