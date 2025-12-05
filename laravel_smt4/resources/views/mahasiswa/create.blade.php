@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center text-primary">➕ Tambah Data Mahasiswa</h2>

    {{-- ALERT JIKA ADA ERROR --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM TAMBAH MAHASISWA --}}
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Masukkan fakultas" required>
        </div>

        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="text" name="angkatan" id="angkatan" class="form-control" placeholder="Contoh: 2023" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-4">
                💾 Simpan
            </button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary px-4">⬅️ Kembali</a>
        </div>
    </form>
</div>
@endsection
