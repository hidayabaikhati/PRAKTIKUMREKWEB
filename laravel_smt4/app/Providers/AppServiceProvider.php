<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
    \App\Models\Post::class => \App\Policies\PostPolicy::class,
];

    public function boot(): void
    {
        // 🔹 Response Macro (Custom)
        Response::macro('caps', function ($value) {
            return Response::make(strtoupper($value));
        });
        
    }
}
