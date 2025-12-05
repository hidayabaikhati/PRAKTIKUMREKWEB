@extends('layouts.app')

@section('content')
<h1>Tambah Peminjaman</h1>

<form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <label>Nama Peminjam:</label>
    <input type="text" name="user_name" required><br><br>

    <label>Buku:</label>
    <input type="text" name="book_title" required><br><br>

    <label>Tanggal Pinjam:</label>
    <input type="date" name="borrow_date" required><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
