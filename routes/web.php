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
use App\Http\Controllers\categoryPages;

Route::get('/', [showPostController::class, 'index']);
Route::get('/series', [categoryPages::class, 'index']);
Route::get('/livros', [categoryPages::class, 'index']);
Route::get('/destaques', [categoryPages::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

