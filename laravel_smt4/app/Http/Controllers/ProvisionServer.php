<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionServer extends Controller
{
    public function __invoke()
    {
        // aksi tunggal di sini
        return "Server provisioned!";
    }
}
