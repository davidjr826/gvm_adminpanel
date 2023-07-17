<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\{AuthController,ProfileController};
use App\Http\Controllers\FirebaseController;

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/admin/login',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/admin/login',[AuthController::class,'postLogin'])->name('postLogin');

Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');

Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');

Route::get('/firebase',[FirebaseController::class,'index'])->name('firebase');