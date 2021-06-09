<?php

use App\Http\Controllers\BreakdownController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RandomController;
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

Route::get('/randoms', [RandomController::class, 'index']);
Route::get('/breakdowns', [BreakdownController::class, 'index']);

/**
 * home page
 */
Route::get('/', [HomeController::class, 'index']);
