<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #6c63ff;
            padding: 15px;
            color: white;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        a.button {
            display: inline-block;
            padding: 10px 15px;
            background: #6c63ff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a.button:hover {
            background: #584ff1;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Dashboard Admin</h2>
</div>

<div class="container">

    <div class="card">
        <h3>Data Mahasiswa</h3>
        <p>Kelola data mahasiswa.</p>
        <a class="button" href="{{ url('admin/mahasiswa') }}">Kelola Mahasiswa</a>
    </div>

    <div class="card">
        <h3>Data Buku</h3>
        <p>Kelola buku perpustakaan.</p>
        <a class="button" href="{{ url('admin/buku') }}">Kelola Buku</a>
    </div>

    <div class="card">
        <h3>Peminjaman Buku</h3>
        <p>Catat dan kelola peminjaman.</p>
        <a class="button" href="{{ url('admin/peminjaman') }}">Kelola Peminjaman</a>
    </div>

</div>

</body>
</html>
