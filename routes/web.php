<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ReadController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/create', [CreateController::class,'create']);
Route::post('/submit', [CreateController::class,'submit']);
Route::get('/read', [ReadController::class,'read'])->name('read');
Route::get('/delete/{id}', [ReadController::class,'delete']);
Route::get('/search', [ReadController::class,'search']);
Route::get('/updatedata/{id}', [ReadController::class,'updatedata']);
Route::post('/update/{id}', [ReadController::class,'update']);
