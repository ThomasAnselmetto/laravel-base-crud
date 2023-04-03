<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
// devo creare un model per poter inserire le voci nella tabella

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song;
        $song->title = 'a';
        $song->album = 'b';
        $song->author = 'c';
        $song->editor = 'd';
        $song->length = 'e';
        $song->poster = 'f';
        $song->streaming_number = '456';
        $song->formats_available = 'vinile';
        
        // il save va messo ogni volta chhe creo un oggetto

        $song->save();

    }
}