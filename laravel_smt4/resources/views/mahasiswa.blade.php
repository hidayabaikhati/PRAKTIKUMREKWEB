@extends('layouts.app')

@section('title', '🎓 Data Mahasiswa | 🌸 Hidaya Web')

@section('content')
<style>
    body {
        background: url('{{ asset('images/pink.jpeg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container-mahasiswa {
        max-width: 950px;
        margin: 60px auto;
        background: white;
        border-radius: 16px;
        box-shadow: 0 5px 25px rgba(255, 105, 180, 0.25);
        padding: 40px 50px;
        border: 1px solid #f9c6dc;
    }

    h1 {
        text-align: center;
        color: #d63384;
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 10px;
    }

    p.sub {
        text-align: center;
        color: #666;
        font-size: 15px;
        margin-bottom: 25px;
    }

    .btn-add {
        background-color: #ff69b4;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        float: right;
        transition: 0.3s;
    }

    .btn-add:hover {
        background-color: #ff85c1;
        transform: scale(1.05);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 25px;
        border: 1px solid #f7cde3;
    }

    th {
        background-color: #ffe4ec;
        color: #d63384;
        padding: 10px;
        font-weight: 600;
        border: 1px solid #f7cde3;
        text-align: center;
    }

    td {
        padding: 10px;
        border: 1px solid #f7cde3;
        text-align: center;
        color: #555;
        font-size: 14px;
    }

    tr:hover td {
        background-color: #fff6fa;
    }

    .btn-edit {
        background-color: #ffd966;
        color: #333;
        padding: 5px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        margin-right: 5px;
    }

    .btn-edit:hover {
        background-color: #ffeb99;
    }

    .btn-delete {
        background-color: #ff6b6b;
        color: white;
        padding: 5px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        border: none;
    }

    .btn-delete:hover {
        background-color: #ff8787;
        cursor: pointer;
    }

    .no-data {
        text-align: center;
        color: #888;
        padding: 15px;
        font-style: italic;
    }

</style>

<div class="container-mahasiswa">
    <h1>🎓 Data Mahasiswa</h1>
    <p class="sub">Daftar Mahasiswa Aktif 🌸 Hidaya Web</p>

    <a href="{{ route('mahasiswa.create') }}" class="btn-add">+ Tambah Mahasiswa</a>
    <div style="clear: both;"></div>

    <table>
        <thead>
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
            @php $mahasiswa = [
                ['nama' => 'Nur Hidayatus Sholekhah', 'nim' => 'G.211.23.0030', 'fakultas' => 'Informatika', 'angkatan' => '2023', 'alamat' => 'Tuban'],
                ['nama' => 'Davi Erwanda', 'nim' => 'G.211.23.0011', 'fakultas' => 'Informatika', 'angkatan' => '2023', 'alamat' => 'Lamongan']
            ]; @endphp

            @forelse ($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['fakultas'] }}</td>
                    <td>{{ $mhs['angkatan'] }}</td>
                    <td>{{ $mhs['alamat'] }}</td>
                    <td>
                        <a href="#" class="btn-edit">✏️ Edit</a>
                        <button class="btn-delete">🗑️ Hapus</button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="no-data">Belum ada data mahasiswa 💭</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
