<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class ResponseController extends Controller
{
    // 🔹 String dan Array
    public function stringResponse()
    {
        return 'Hello World';
    }

    public function arrayResponse()
    {
        return [1, 2, 3];
    }

    public function modelResponse()
    {
        return User::all(); // otomatis JSON
    }

    // 🔹 Response Objects dan Headers
    public function customResponse()
    {
        return response('Hello', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function headerResponse()
    {
        return response('Headers attached')
            ->withHeaders([
                'X-Header-One' => 'Value1',
                'X-Header-Two' => 'Value2'
            ]);
    }

    // 🔹 Cookies
    public function cookieResponse()
    {
        return response('Cookie added')
            ->cookie('username', 'Hidaya', 5);
    }

    public function removeCookie()
    {
        return response('Cookie removed')->withoutCookie('username');
    }

    // 🔹 Redirects
    public function redirectHome()
    {
        return redirect('/'); // redirect dasar
    }

    public function redirectRoute()
    {
        return redirect()->route('login'); // pastikan ada route 'login'
    }

    public function redirectAction()
    {
        return redirect()->action([self::class, 'stringResponse']);
    }

    public function redirectAway()
    {
        return redirect()->away('https://google.com');
    }

    public function redirectFlash()
    {
        return redirect('/dashboard')->with('status', 'Profile updated!');
    }

    // 🔹 Other Response Types
    public function viewResponse()
    {
        $data = ['name' => 'Hidaya', 'message' => 'Welcome to Laravel!'];
        return response()->view('hello', $data, 200);
    }

    public function jsonResponse()
    {
        return response()->json(['name' => 'Abigail', 'role' => 'Admin']);
    }

    public function fileDownload()
    {
        $path = public_path('files/sample.txt');
        return response()->download($path, 'downloaded.txt');
    }

    public function fileShow()
    {
        $path = public_path('files/sample.pdf');
        return response()->file($path);
    }
}
