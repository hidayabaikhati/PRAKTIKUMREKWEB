@extends('layouts.app')

@section('title', 'Edit Mahasiswa | 🌸 Hidaya_Davier')

@section('content')
<div class="bg-container">
    <div class="container py-5">
        <h2 class="fw-bold text-pink mb-4 text-center">✏️ Edit Data Mahasiswa</h2>

        <div class="card shadow-sm p-4">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" 
                        value="{{ old('nama', $mahasiswa->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">NIM</label>
                    <input type="text" name="nim" class="form-control" 
                        value="{{ old('nim', $mahasiswa->nim) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Fakultas</label>
                    <input type="text" name="fakultas" class="form-control" 
                        value="{{ old('fakultas', $mahasiswa->fakultas) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" 
                        value="{{ old('angkatan', $mahasiswa->angkatan) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-pink">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
/* 🌸 Warna tema */
.text-pink { color: #d63384; }
.btn-pink {
    background-color: #d63384;
    color: white;
    border-radius: 8px;
}
.btn-pink:hover { background-color: #c2185b; color: white; }


</style>
@endsection
