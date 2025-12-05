<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 Hidaya Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- NAVIGASI -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Hidaya" class="h-10 w-10 rounded-full">
                    <span class="text-xl font-bold text-pink-600">🌸 Hidaya Web</span>
                </div>

                <!-- Guest Links -->
                <div class="flex space-x-4">
                    <a href="{{ url('/login') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Login</a>
                    <a href="{{ url('/register') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="flex flex-col items-center justify-center h-screen text-center px-4">
        <img src="{{ asset('images/logo_pink.jpeg') }}" alt="Logo Hidaya" class="w-32 h-32 rounded-full mb-6 shadow-lg">
        <h1 class="text-4xl font-bold text-pink-600 mb-4">Selamat Datang di Website Pribadi Hidaya 🌸</h1>
        <p class="text-gray-700 mb-6">
            Untuk mengakses fitur, silakan login atau daftar menggunakan menu di atas.
        </p>
        <div class="flex space-x-4">
            <a href="{{ url('/login') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</a>
            <a href="{{ url('/register') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">Daftar</a>
        </div>
    </div>

</body>
</html>
