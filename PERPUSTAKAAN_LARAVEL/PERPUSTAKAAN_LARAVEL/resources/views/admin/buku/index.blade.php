@extends('layouts.app')

@section('content')
<div class="container">

    <h2>📚 Daftar Buku</h2>

    <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    <a href="{{ url('/admin') }}" class="btn btn-secondary">⬅ Kembali</a>

    <br><br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->deskripsi }}</td>
                <td>
                    @if ($book->gambar)
                        <img src="{{ asset('gambar_buku/'.$book->gambar) }}" width="70">
                    @else
                        Tidak ada
                    @endif
                </td>

                <td>
                    <a href="{{ route('buku.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('buku.destroy', $book->id) }}" 
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus buku ini?')" 
                                class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
