<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        header {
            background: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav {
            background: #333;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        .btn-kembali {
            background: #555;
            padding: 8px 14px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-kembali:hover {
            background: #333;
        }
    </style>
</head>
<body>

<header>
    <h1>Dashboard Admin Perpustakaan</h1>
</header>

<nav>
    <a href="{{ route('buku.index') }}">Daftar Buku</a>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
