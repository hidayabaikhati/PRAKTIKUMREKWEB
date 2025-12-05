<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="{{ route('register.store') }}" method="POST" class="bg-white p-8 rounded shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun</h2>
        <input type="text" name="name" placeholder="Nama" class="w-full p-2 mb-4 border rounded">
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded">
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full p-2 mb-4 border rounded">
        <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700">Daftar</button>
    </form>
</body>
</html>
