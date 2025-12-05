<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">

    <!-- TOMBOL KEMBALI -->
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    <h2 class="mb-4">Tambah Data Mahasiswa</h2>

    <div class="card p-4 shadow-sm">

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="number" name="angkatan" class="form-control" required placeholder="contoh: 2022">
            </div>

            <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
        </form>

    </div>
</div>

</body>
</html>
