<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     * ci fa vedere tutte le liste della risorsa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // della lista delle canzoni se ne occupa SongController al metodo index e poi passo la var nel compact come stringa il quale crea un array con la var e i suoi attributi

// utilizzo limit() invece di all() per far comparire a schermo solo 10 elementi del database

        $songs = Song::limit(10)->offset(0)->get();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // posso passare come parametro di show l'intero oggetto invece che passare l'$id che poi devo andarmi a recuperare con una query:
    // $song = Song::find($id);

    public function show(Song $song)
    {
    //    la mia funzione ritorna i dati del parametro song alla view (songs.show) 
        return view('songs.show', compact('song'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}