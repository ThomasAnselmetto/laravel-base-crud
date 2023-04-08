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

        $request->validate([
        
            'title' => 'required',
            'album' => 'required|string|max:50',
            'author' => 'required|string|max:50',
            'editor' => 'required|string|max:50',
            'length' => 'required|decimal:2',
            'number_of_streaming' => 'required|integer|between:1,10000000',
            'music_release_formats' => "required|string|in:33 giri,45 giri,cd,digitale"
        ],[
            '*.required' => ':attribute is Required',
            'length.decimal' => 'the number must have two decimals'
        ]);
        $data = $request->all();

        $song = new Song;
        // forma estesa
        // $song->title = $data["title"];
        // $song->album = $data["album"];
        // $song->author = $data["author"];  
        // $song->editor = $data["editor"];
        // $song->length = $data["length"];
        // $song->poster = $data["poster"];
        // $song->number_of_streaming = $data["number_of_streaming"];
        // $song->music_release_formats = $data["music_release_formats"];
        // che si puo' sintetizzare se attributo e chiave corrispondono
        $song->fill($data);
        // per poter utilizzare fill devo stabilire gli elementi fillable nel model
        $song->save();
        return redirect()->route('songs.show',$song);
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
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  anche qui possiamo sostituire $id con la dipendence injection(Model $var)
    public function update(Request $request, Song $song)
    {
        $request->validate([
        
            'title' => 'required',
            'album' => 'required|string|max:50',
            'author' => 'required|string|max:50',
            'editor' => 'required|string|max:50',
            'length' => 'required|decimal:2',
            'number_of_streaming' => 'required|integer|between:1,10000000',
            'music_release_formats' => "required|string|in:33 giri,45 giri,cd,digitale"
        ],[
            '*.required' => ':attribute is Required',
            'length.decimal' => 'the number must have two decimals'
        ]);
        $data = $request->all();
        
        // per poter utilizzare fill devo stabilire gli elementi fillable nel model
        $song->update($data);
        return redirect()->route('songs.show',$song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // il destroy e' semplice dipendence injection(Model $var) e poi $var delete() e redirect
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}