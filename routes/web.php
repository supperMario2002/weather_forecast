<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MapDetailController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news-detail', [NewsDetailController::class, 'index'])->name('news-detail');
Route::get('/map', [MapController::class, 'index'])->name('map');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

