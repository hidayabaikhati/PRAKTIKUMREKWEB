<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\Status;

class DemoController extends Controller
{
    public function handleForm(Request $request)
    {
        $request->validate([
            'name'   => 'required|string',
            'age'    => 'required|integer',
            'active' => 'required|boolean',
            'status' => 'required'
        ]);

        $allData = $request->all();
        $name = $request->name;
        $request->flash();

        $cookieValue = $request->cookie('user_name', 'Not Set');

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $filePath = $request->file('avatar')->store('avatars');
        } else {
            $filePath = null;
        }

        return response()->json([
            'allData' => $allData,
            'name'    => $name,
            'cookie'  => $cookieValue,
            'file'    => $filePath,
        ])->cookie('user_name', $name, 60);
    }
}
