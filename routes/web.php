<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainFrontController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('/', MainFrontController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// acting
Route::resource('movies', MoviesController::class);
Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');

Route::resource('category', CategoryController::class);
Route::resource('types', TypeController::class);
