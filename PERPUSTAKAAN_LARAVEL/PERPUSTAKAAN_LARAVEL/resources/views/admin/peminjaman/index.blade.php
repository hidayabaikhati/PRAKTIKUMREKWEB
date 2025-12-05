@extends('layouts.app')

@section('content')
<h1>Daftar Peminjaman</h1>
<a href="{{ route('peminjaman.create') }}">Tambah Peminjaman</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Peminjam</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
    </tr>
    @forelse($borrowings as $borrowing)
    <tr>
        <td>{{ $borrowing->id }}</td>
        <td>{{ $borrowing->user_name }}</td>
        <td>{{ $borrowing->book_title }}</td>
        <td>{{ $borrowing->borrow_date }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="4">Belum ada peminjaman</td>
    </tr>
    @endforelse
</table>
@endsection
