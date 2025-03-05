<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class , "home"])->name('home');

Route::post('/addproduct', [ProductController::class , "store"])->name('addproduct');
Route::get('/delproduct', [ProductController::class , "destroy"])->name('delproduct');
