<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SubtitleController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/movies', [FilmController::class, 'index'])->name('movies.index');

Route::get('/subtitles', [SubtitleController::class, 'index'])->name('subtitles.index');

Route::get('subtitles/{subtitle}', [SubtitleController::class, 'show'])->name('subtitles.show');

Route::get('/movies/search', [FilmController::class, 'search'])->name('film.search');

Route::get('/subtitle/search', [SubtitleController::class, 'search'])->name('subtitles.search');