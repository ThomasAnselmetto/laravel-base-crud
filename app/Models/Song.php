<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // gestisco il numero di caratteri del title
    protected $fillable = ["title",
    "album",
    "author",
    "editor",
    "length",
    "poster",
    "number_of_streaming",
    "music_release_formats"];

    public function getAbstract($chars = 30){
        return substr($this->title, 0, $chars);
        // la funzione substr stabilisce il carattere di inizio e di fine lettura della frase (sentence,inizio,fine)
    }
}