<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // 🌸 Tampilkan semua postingan
    public function index()
    {
        $posts = Post::with(['category', 'user'])->get();
        return view('posts.index', compact('posts'));
    }

    // 🌸 Form tambah postingan
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    // 🌸 Simpan postingan baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(), // ✨ wajib diisi user yang login
        ]);

        // ✅ Ganti 'posts.index' → 'post.index'
        return redirect()->route('post.index')->with('success', '✅ Postingan berhasil ditambahkan!');
    }

    // 🌸 Form edit postingan
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    // 🌸 Update postingan
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('post.index')->with('success', '✅ Postingan berhasil diperbarui!');
    }

    // 🌸 Hapus postingan
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', '🗑️ Postingan berhasil dihapus!');
    }
}
