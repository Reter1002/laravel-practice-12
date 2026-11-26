<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about']);

Route::get('/hello/{name?}', [PageController::class, 'hello'])
    ->name('hello');

Route::get('/user/{id}', [PageController::class, 'show'])
    ->whereNumber('id');

Route::get('/posts/{post}/comments/{comment}', [PageController::class, 'comment']);

Route::get('/posts/{id}', [PageController::class, 'postShow'])
    ->whereNumber('id')
    ->name('posts.show');
