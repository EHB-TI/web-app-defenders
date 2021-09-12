<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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


Auth::routes();

Route::get('/', [PagesController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/create', [PostController::class, 'create']);

Route::post('/blog', [PostController::class, 'store']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

