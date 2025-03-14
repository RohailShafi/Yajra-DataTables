<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/' , [UsersController::class , 'index'])->name('users');
Route::get('pdf', [UsersController::class , 'index']);

