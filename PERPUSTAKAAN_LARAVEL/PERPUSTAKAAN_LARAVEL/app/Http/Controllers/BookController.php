<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Menampilkan semua buku
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.buku.index', compact('books'));
    }

    /**
     * Form tambah buku
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Proses tambah buku
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Upload gambar
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('gambar_buku'), $imageName);

        // Simpan data
        Book::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $imageName
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Form edit buku
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.buku.edit', compact('book'));
    }

    /**
     * Proses update buku
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $book = Book::findOrFail($id);

        // Update gambar
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if ($book->gambar && file_exists(public_path('gambar_buku/' . $book->gambar))) {
                unlink(public_path('gambar_buku/' . $book->gambar));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar_buku'), $imageName);

        } else {
            $imageName = $book->gambar;
        }

        // Update data
        $book->update([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $imageName
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Hapus buku
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        // Hapus file gambar
        if ($book->gambar && file_exists(public_path('gambar_buku/' . $book->gambar))) {
            unlink(public_path('gambar_buku/' . $book->gambar));
        }

        // Hapus data
        $book->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
