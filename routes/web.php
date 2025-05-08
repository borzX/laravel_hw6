<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/helloworld', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('form');
    });

// Route::get('/index', [Book::class, 'up']);

Route::post('/store-form', [Book::class, 'store'] );
