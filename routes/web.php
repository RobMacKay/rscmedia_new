<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome-to-rsc-media', function () {
    return view('web-welcome');
})->name('landing-page');

Route::get('/services', function(){
    return view('services');
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
