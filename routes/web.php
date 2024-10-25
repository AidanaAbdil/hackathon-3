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
Route::get('/pets/create', [App\Http\Controllers\AnimalController::class, 'create'])->name('pets.create');
Route::post('/pets/store', [App\Http\Controllers\AnimalController::class, 'store'])->name('pets.store');
Route::get('/pets/edit/{id}', [App\Http\Controllers\AnimalController::class, 'edit'])->name('pets.edit');
Route::post('/pets/update', [App\Http\Controllers\AnimalController::class, 'update'])->name('pets.update');