<?php

use Illuminate\Support\Facades\Route;
// importiamo controller
use App\Http\Controllers\SongController;

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
// dopo diversi tentativi sono arrivato alla view giusta songs/index

Route::get('/', function () {
    return view('songs/index');
});
Route::get('/show', function () {
    return view('songs/show');
});

// creo la rotta delle canzoni,con una route resource che al suo interno ha gia' index,create,store,destroy ecc...

// Route::get('/layouts/app', function () {
//     return view('app');
// });
// questo comando qui genera tutte le rotte

Route::resource('songs',SongController::class);

// creiamo le rotte della risorsa songs e questa cosa e' gestita dal controller SongController

// nel caso in cui avessimo un array di rotte la sintassi e' questa
// Route::resources([
//     'songs'=> SongController::class,
//     'cani'=> CaneController::class,
// ])