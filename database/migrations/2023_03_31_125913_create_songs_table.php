<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('album',50);
            $table->string('author',50);
            $table->string('editor',50);
            $table->float('length');
            $table->string('poster');
            $table->integer('number_of_streaming')->unsigned();
            $table->enum('music_release_formats', ['vinile','digitale']);
            // timestamp crea i due campi di tracciamento nella tabella
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
            