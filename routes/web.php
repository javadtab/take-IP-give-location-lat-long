<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/location' , [UserController::class , 'index'])->name('location0');
Route::post('/location' , [UserController::class , 'index'])->name('location');
