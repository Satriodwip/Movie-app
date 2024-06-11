<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::resource('/movies', MovieController::class);
Route::resource('/genres', GenreController::class);
Route::resource('/reviews', ReviewController::class);









// Route::get('/si02', function () {
//     return "belajar laravel";
// });