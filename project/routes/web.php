<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/login', [PageController::class , "login"])->name('login');
Route::get('/register', [PageController::class , "register"])->name('register');

Route::post('/signin', [AuthController::class , "signin"])->name('signin');
Route::post('/signup', [AuthController::class , "signup"])->name('signup');
Route::post('/logout', [AuthController::class , "logout"])->name('logout');
Route::get('/noauthorized', [PageController::class , "noauthorized"])->name('noauthorized');

Route::get(
            '/',
            [PageController::class , "home"]
            )->middleware('AuthMiddleware:everyone')
            ->name('home');

Route::get(
            '/dashboard',
            [PageController::class , "dashboard"]
            )->middleware('AuthMiddleware:admin')
            ->name('dashboard');

Route::get('/getCount', [UserController::class , "getCount"])->name('getCount');


// Route::post('/addproduct', [ProductController::class , "store"])->name('addproduct');
// Route::get('/delproduct', [ProductController::class , "destroy"])->name('delproduct');
