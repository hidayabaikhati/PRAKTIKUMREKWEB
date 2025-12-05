<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold text-gray-800">Dashboard</a>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex flex-col items-center justify-center h-screen text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di Dashboard</h1>
        <p class="text-gray-600 mb-6">Silakan login atau daftar untuk mengakses fitur penuh</p>
    </div>

</body>
</html>
