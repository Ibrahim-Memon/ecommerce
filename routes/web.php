<?php
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
Route::get('/admin',[AdminController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
