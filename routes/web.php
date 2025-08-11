<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome-to-rsc-media', function () {
    return view('web-welcome');
})->name('landing-page');

Route::get('/developer-backup', function () {
    return view('web-retainer');
})->name('web-retainer');

Route::get('/services', function(){
    return view('services');
});

Route::get('/thank-you', function(){
    return view('thank-you');
});

Route::get('/about', function(){
    return view('about');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
