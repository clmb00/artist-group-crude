<?php

use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\MuseumController;
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

Route::resource('museums', MuseumController::class);
Route::resource('artists', ArtistsController::class);
Route::resource('artworks', ArtworkController::class);
