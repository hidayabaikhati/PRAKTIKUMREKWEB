<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController implements \Illuminate\Contracts\Support\DeferrableProvider
{
    public static function middleware(): array
    {
        return [
            'auth',
            new \App\Http\Middleware\LogMiddleware(only: ['index']),
            new \App\Http\Middleware\SubscribedMiddleware(except: ['store']),
        ];
    }

    public function index()
    {
        // aksi menampilkan data user
    }

    public function store(Request $request)
    {
        // aksi menyimpan data user
    }
}
