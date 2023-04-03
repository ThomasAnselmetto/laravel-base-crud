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
            $table->string('title',50);
            $table->string('album',50);
            $table->string('author',50);
            $table->string('editor',50);
            $table->string('length',15);
            $table->string('poster');
            $table->integer('streaming_number');
            $table->enum('formats_available', ['vinile','digitale']);
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
            