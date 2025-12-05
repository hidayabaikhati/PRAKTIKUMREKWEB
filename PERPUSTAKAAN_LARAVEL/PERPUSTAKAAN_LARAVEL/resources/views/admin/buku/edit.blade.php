@extends('admin.layouts.app')

@section('content')
<h2>Edit Buku</h2>
<form action="{{ route('buku.update', $book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Judul:</label>
    <input type="text" name="judul" value="{{ $book->judul }}" required>
    <label>Penulis:</label>
    <input type="text" name="penulis" value="{{ $book->penulis }}" required>
    <label>Deskripsi:</label>
    <textarea name="deskripsi">{{ $book->deskripsi }}</textarea>
    <label>Gambar Lama:</label>
    @if($book->gambar)
        <img src="{{ asset('storage/'.$book->gambar) }}" width="120">
    @else
        <p>Tidak ada gambar.</p>
    @endif
    <label>Ganti Gambar Baru:</label>
    <input type="file" name="gambar">
    <button type="submit">Update</button>
    <a href="{{ route('buku.index') }}" class="btn-kembali">Kembali</a>
</form>
@endsection
