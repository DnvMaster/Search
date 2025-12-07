<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('search');
Route::get('/search',[PostController::class,'search']);
Route::get('add/post',[PostController::class,'create'])->name('add.post');
