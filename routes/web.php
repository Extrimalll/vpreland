<?php

use App\Http\Controllers\FrontController;
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


Route::get('/', [FrontController::class, 'index']);

Route::get('/{group}', [FrontController::class, 'kitchen']);
Route::post('/addTag', [FrontController::class, 'addTag']);
Route::post('/removeTag', [FrontController::class, 'removeTag']);

