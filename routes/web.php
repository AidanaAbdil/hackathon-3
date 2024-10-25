<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pets', [App\Http\Controllers\AnimalController::class,'index']);
Route::post('/pets/search', [App\Http\Controllers\AnimalController::class,'search'])->name('pets.search');
