<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'message' => 'Bem-vindo ao Inertia.js com Laravel e Vue!',
        'items' => ['um', 'dois', 'tres']
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});
