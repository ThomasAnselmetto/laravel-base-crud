<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // stabilisco che voglio eseguire il seeder Song e con il comando 'php artisan db:seed' dichiaro tramite il databaseseeder(che e' un po' il master dei seeder) quale seed runnare dal terminale.

        $this->call([
            // questo e' un array e se avessi piu' seeder li separo con una virgola
            
            SongSeeder::class
        ]);
    }
}