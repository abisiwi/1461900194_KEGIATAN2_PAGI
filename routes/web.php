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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Select0194', [App\Http\Controllers\BukuController::class,'Select0194'])->name('select');
Route::get('SelectWhere0194', [App\Http\Controllers\BukuController::class,'SelectWhere0194'])->name('selectwhare');
Route::get('SelectJoin0194', [App\Http\Controllers\BukuController::class,'SelectJoin0194'])->name('selectJoin');
Route::get('SelectJoinWhere0194', [App\Http\Controllers\BukuController::class,'SelectJoinWhere0194'])->name('selectJoinWhere');
