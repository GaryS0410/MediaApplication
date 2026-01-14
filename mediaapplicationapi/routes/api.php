<?php

use App\Http\Controllers\Api\MediaController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/movies/popular', [MediaController::class, 'popularMovies']);
Route::get('/movies/search/', [MediaController::class, 'searchMovie']);

Route::get('/tv/popular', [MediaController::class, 'popularShows']);

Route::get('/', function() {
    return 'API';
});

Route::post('/register', [AuthController::class, 'registerNewUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/logout', [AuthController::class, 'logoutUser'])
    ->middleware('auth:sanctum');