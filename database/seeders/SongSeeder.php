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
        $song->title = $faker->paragraph();
        $song->album = $faker->asciify('hello-world');
        $song->author = $faker->numerify('singer-####');
        $song->editor = $faker->asciify('hello-world');
        $song->length = $faker->shuffle('hello-world');
        $song->poster = 'https://picsum.photos/300/500';
        $song->streaming_number = $faker->randomNumber(6,true);
        $song->formats_available = $faker->randomElement(['vinile','digitale']);
        
        // il save va messo ogni volta chhe creo un oggetto
        $song->save();

    }

    }
}