<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/location' , [UserController::class , 'index'])->name('location');
Route::post('/location2' , [UserController::class , 'index2'])->name('location2');
