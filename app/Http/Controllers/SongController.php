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
    public function index(Request $request)
    {
        // se c'e' un term nell'url(request)trovami una o piu' canzoni il cui name e' uguale a term
        if($request->has('term')){
            $term = $request->get('term');
            $songs = Song::where('title','LIKE',"%$term%")->paginate(11)->withQueryString();
        }else{

            $songs = Song::paginate(11);
        }
        return view('songs.index', compact('songs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $song = new Song;
        $song->title = $data["title"];
        $song->album = $data["album"];
        $song->author = $data["author"];  
        $song->editor = $data["editor"];
        $song->length = $data["length"];
        $song->poster = $data["poster"];
        $song->number_of_streaming = $data["number_of_streaming"];
        $song->music_release_formats = $data["music_release_formats"];
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