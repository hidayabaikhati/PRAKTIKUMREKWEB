<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;

class BorrowingController extends Controller
{
    public function __construct()
    {
        // Memastikan semua method hanya untuk user login
        $this->middleware('auth');
    }

    public function index()
    {
        $borrowings = Borrowing::all();
        return view('admin.peminjaman.index', compact('borrowings'));
    }

    public function create()
    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $request)
    {
        // Validasi & simpan
    }

    public function edit($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        return view('admin.peminjaman.edit', compact('borrowing'));
    }

    public function update(Request $request, $id)
    {
        // Update data
    }

    public function destroy($id)
    {
        Borrowing::destroy($id);
        return redirect()->route('peminjaman.index');
    }

    public function returnBook($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->returned = true;
        $borrowing->save();

        return redirect()->route('peminjaman.index');
    }
}
