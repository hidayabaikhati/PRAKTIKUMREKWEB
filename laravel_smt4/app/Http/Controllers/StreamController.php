<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\StreamedEvent;

class StreamController extends Controller
{
    // 🔹 Dasar Stream
    public function streamBasic()
    {
        return response()->stream(function () {
            echo "Streaming data in chunks...\n";
            flush();
        });
    }

    // 🔹 Streamed JSON
    public function streamJson()
    {
        return response()->streamJson(['users' => User::cursor()]);
    }

    // 🔹 Streamed Download
    public function streamDownload()
    {
        return response()->streamDownload(function () {
            echo "This is the streamed file content.";
        }, 'streamed.txt');
    }

    // 🔹 Event Stream (SSE)
    public function eventStream()
    {
        return response()->eventStream(function () {
            yield new StreamedEvent(event: 'update', data: 'Server-sent event message');
        });
    }
}
