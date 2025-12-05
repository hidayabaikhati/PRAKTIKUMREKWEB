<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Menampilkan halaman form
    public function showForm()
    {
        return view('form');
    }

    // Menangani submit form
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer',
            'active' => 'required|boolean',
            'items' => 'nullable|array',
            'birth' => 'required|date',
            'status' => 'required'
        ]);

        return redirect()->back()
            ->with('success', 'Form submitted successfully!')
            ->with('data', $request->all());
    }
}
