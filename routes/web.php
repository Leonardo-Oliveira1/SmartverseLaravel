<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\showPostController;
use App\Http\Controllers\categoryPagesController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\dashboardController;

//Home
Route::get('/', [showPostController::class, 'index']);
Route::get('/series', [categoryPagesController::class, 'index']);
Route::get('/livros', [categoryPagesController::class, 'index']);
Route::get('/destaques', [categoryPagesController::class, 'index']);

//Dashboard
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/dashboard/create', [CreatePostController::class, 'index']);
Route::post('/dashboard/submit', [CreatePostController::class, 'store']);
