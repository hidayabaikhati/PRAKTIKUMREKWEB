@extends('layouts.app')

@section('title', '🎓 Data Mahasiswa')

@section('content')
<div class="mahasiswa-container">
    <div class="content-box text-center">
        <h2 class="mb-3 title">🎓 Data Mahasiswa</h2>
        <p class="subtitle">Berikut adalah daftar mahasiswa aktif di website Laravel milik Hidaya 🌸</p>

        <!-- Tombol tambah -->
        <div class="text-center mb-4">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-pink">➕ Tambah Mahasiswa</a>
        </div>

        <!-- Tabel data -->
        <div class="table-wrapper">
            <table class="table table-bordered text-center align-middle shadow rounded">
                <thead class="table-pink">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Fakultas</th>
                        <th>Angkatan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $index => $m)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->fakultas }}</td>
                            <td>{{ $m->angkatan }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning btn-sm">✏️</a>

                                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Data mahasiswa masih kosong.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- STYLE -->
<style>
    body {
        background: url('/images/pink.jpeg') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .mahasiswa-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 90px;
        padding-bottom: 90px;
    }

    .content-box {
        background: rgba(255, 255, 255, 0.93);
        padding: 40px;
        border-radius: 18px;
        box-shadow: 0 0 15px rgba(214, 51, 132, 0.3);
        width: 90%;
        max-width: 950px;
        transition: all 0.3s ease;
    }

    .content-box:hover {
        transform: scale(1.01);
    }

    .title {
        color: #d63384;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .subtitle {
        color: #555;
        font-size: 15px;
        margin-bottom: 30px;
    }

    .btn-pink {
        background-color: #ff80b5;
        color: white;
        border: none;
        border-radius: 12px;
        padding: 10px 18px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 3px 6px rgba(214, 51, 132, 0.2);
    }

    .btn-pink:hover {
        background-color: #e7549a;
        transform: translateY(-2px);
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        width: 100%;
    }

    .table-pink th {
        background-color: #ffd6e8;
        color: #9b1b5a;
        font-weight: 600;
    }

    td, th {
        vertical-align: middle;
        border-color: #f8c8d9 !important;
        padding: 12px 10px;
    }

    tbody tr {
        transition: background-color 0.2s ease;
    }

    tbody tr:hover {
        background-color: #fff0f7;
    }

    .btn-warning {
        background-color: #fcd34d;
        color: #6a1a44;
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        transition: 0.2s;
    }

    .btn-warning:hover {
        background-color: #fbbf24;
    }

    .btn-danger {
        background-color: #ef4444;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        transition: 0.2s;
    }

    .btn-danger:hover {
        background-color: #dc2626;
    }
</style>
@endsection
