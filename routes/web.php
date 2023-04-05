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
// dopo diversi tentativi sono arrivato alla view giusta songs/index
// Route::get('/', function () {
//     return view('layouts/app');
// })->name('homepage');

// Route::get('/songs', function () {
//     return view('songs/index');
// });
// Route::get('/show', function () {
//     return view('songs/show');
// });

// creo la rotta delle canzoni,con una route resource che al suo interno ha gia' index,create,store,show,edit e destroy ecc...

// Route::get('/layouts/app', function () {
//     return view('app');
// });
// questo comando qui genera tutte le rotte
Route::get('/', [Pagecontroller::class, 'index'])->name('homepage');

Route::resource('songs',SongController::class);

// creiamo le rotte della risorsa songs e questa cosa e' gestita dal controller SongController

// nel caso in cui avessimo un array di rotte la sintassi e' questa
// Route::resources([
//     'songs'=> SongController::class,
//     'cani'=> CaneController::class,
// ])

// ! Rotte contenute in Route::resource
// * Rotta per la lista index
// Route::get('/songs', [PageController::class, 'index'])->name('songs.index');

// * Rotta per il dettaglio risorsa show
// Route::get('/songs/{song}', [songController::class, 'show'])->name('songs.show');

// * Rotta per il form creazione risorsa
// Route::get('/songs/create', [songController::class, 'create'])->name('songs.create');

// * Rotta per il salvataggio form creazione risorsa
// Route::get('/songs', [songController::class, 'store'])->name('songs.store');

// * Rotta per il form di modifica risorsa
// Route::get('/songs/{song}/edit', [songController::class, 'edit'])->name('songs.edit');

// * Rotta per il form di modifica risorsa
// Route::put('/songs/{song}/update', [songController::class, 'update'])->name('songs.update');

// * Rotta per cancellazione risorsa singola
// Route::delete('/songs/{song}/destroy', [songController::class, 'destroy'])->name('songs.destroy');