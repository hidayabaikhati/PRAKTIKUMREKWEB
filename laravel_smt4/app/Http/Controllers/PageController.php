<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $users = [
            ['name' => 'Nur Hidayatus Sholekhah', 'nim' => 'G.211.23.0030'],
            ['name' => 'Davier', 'nim' => 'G.211.23.0001']
        ];
        return view('home', compact('users'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $user = (object)['isAdmin' => false];
        return view('contact', compact('user'));
    }
}
