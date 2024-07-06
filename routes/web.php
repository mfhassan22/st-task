<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard')->middleware('auth');

Route::get('/dashboard/writers',[WriterController::class,'list'])->name('writers')->middleware('auth');
Route::get('/dashboard/writers/{id}',[WriterController::class,'booksByAuthor'])->name('writers.books')->middleware('auth');

Route::get('/dashboard/books/{book}',[BookController::class,'bookDetails'])->name('book.details')->middleware('auth');

//Using logging middleware for login
Route::get('/login',[AuthController::class,'show'])->name('login')->middleware('log.ip');;
Route::post('/login',[AuthController::class,'login'])->name('login.post');
Route::get('/register',[AuthController::class,'registerForm'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');