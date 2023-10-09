<?php

use App\Http\Controllers\ProgressBarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProgressBarController::class, 'index']);
Route::get('/home', [ProgressBarController::class, 'index']);
Route::post('/upload-doc-file', [ProgressBarController::class, 'uploadToServer']);
