<?php

use Illuminate\Support\Facades\Route;
// importiamo controller
use App\Http\Controllers\SongController;
use App\Http\Controllers\PageController;

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

// creo la rotta delle canzoni,con una route resource che al suo interno ha gia' index,create,store,show,edit e destroy ecc...


// questo comando qui genera tutte le rotte
Route::get('/', [Pagecontroller::class, 'index'])->name('homepage');

Route::resource('songs',SongController::class);

// creiamo le rotte della risorsa songs e questa cosa e' gestita dal controller SongController

// dopo diversi tentativi sono arrivato alla view giusta songs/index


// Route::get('/songs', function () {
//     return view('songs/index');
// });
// Route::get('/show', function () {
//     return view('songs/show');
// });
// nel caso in cui avessimo un array di rotte la sintassi e' questa
// Route::resources([
//     'songs'=> SongController::class,
//     'cani'=> CaneController::class,
// ])