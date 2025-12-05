<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo; // pastikan model Photo ada

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all(); // ambil semua data
        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Photo::create($request->all());
        return redirect()->route('photos.index')->with('success', 'Photo berhasil dibuat!');
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $photo->update($request->all());
        return redirect()->route('photos.index')->with('success', 'Photo berhasil diperbarui!');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')->with('success', 'Photo berhasil dihapus!');
    }
}
