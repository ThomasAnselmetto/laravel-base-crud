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

Route::get('/', function () {
    return view('welcome');
});

// creo la rotta delle canzoni,con una route resource che al suo interno ha gia' index,create,store,destroy ecc...

Route::get('/', function () {
    return view('welcome');
});
// questo comando qui genera tutte le rotte

Route::resource('songs',SongController::class);

// creiamo le rotte della risorsa songs e questa cosa e' gestita dal controller SongController