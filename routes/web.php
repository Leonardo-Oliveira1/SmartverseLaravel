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

use App\Http\Controllers\homeController;
use App\Http\Controllers\categoryPagesController;
use App\Http\Controllers\registeringPost;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\creatingPageController;


//Home
Route::get('/', [homeController::class, 'index']);
Route::get('/cinema', [categoryPagesController::class, 'index']);
Route::get('/livros', [categoryPagesController::class, 'index']);
Route::get('/destaques', [categoryPagesController::class, 'index']);

//Dashboard
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/dashboard/create', [registeringPost::class, 'index']);
Route::post('/dashboard/submit', [registeringPost::class, 'store']);

//Pages
Route::get('post/{category}/{slug}', [creatingPageController::class, 'index']);

