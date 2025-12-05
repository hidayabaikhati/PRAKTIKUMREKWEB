<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // ✅ Menampilkan halaman kontak
    public function index()
    {
        return view('contact');
    }

    // ✅ Mengirim & menyimpan pesan
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Simpan pesan ke database
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        // Redirect kembali ke halaman contact
        return redirect()
            ->route('contact')
            ->with('success', '💌 Pesan kamu berhasil dikirim! Terima kasih sudah menghubungi kami 🌸');
    }
}
