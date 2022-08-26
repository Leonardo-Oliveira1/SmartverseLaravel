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
use App\Http\Controllers\creatingPageController;
use App\Http\Controllers\searchController;

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\dashboardController;

use App\Http\Controllers\registeringPost;
use App\Http\Controllers\postsDashboardController;
use App\Http\Controllers\editPostController;


//Home
Route::get('/', [homeController::class, 'index']);
Route::get('categoria/{category}', [categoryPagesController::class, 'index']);

//Dashboard
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/dashboard/posts', [postsDashboardController::class, 'index'])->name('dashboardPosts');

Route::get('/dashboard/create', [registeringPost::class, 'index']);
Route::post('/dashboard/submit', [registeringPost::class, 'store']);

Route::get('/dashboard/editPost={id}', [editPostController::class, 'index']);
Route::post('/dashboard/editPostSubmit={id}', [editPostController::class, 'update']);

//Pages
Route::get('post/{category}/{slug}', [creatingPageController::class, 'index']);
Route::get('/buscar', [searchController::class, 'index']);


