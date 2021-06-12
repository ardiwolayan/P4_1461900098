<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [BukuController::class, 'index']);
Route::get('0098index', [BukuController::class, 'index']);
Route::get('users/export/', [BukuController::class, 'export']);
Route::get('0098filter1', [BukuController::class, 'filter1']);
Route::get('0098filter2', [BukuController::class, 'filter2']);
