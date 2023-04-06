<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;
// devo creare un model per poter inserire le voci nella tabella

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   for($i = 0;$i < 50; $i++){

        $song = new Song;
        $song->title = $faker->paragraph(1);
        $song->album = $faker->asciify();
        $song->author = $faker->numerify('singer-####');
        $song->editor = $faker->asciify();
        $song->length = $faker->randomFloat(2, 3, 20);
        $song->poster = 'https://picsum.photos/id/69/400/300';
        $song->number_of_streaming = $faker->randomNumber(6,true);
        $song->music_release_formats = $faker->randomElement(['vinile','digitale']);
        
        // il save va messo ogni volta chhe creo un oggetto
        $song->save();

    }

    }
}