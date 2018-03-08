<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('playlist_id');
            $table->integer('track_id');

            $table->timestamps();

            $table->foreign('playlist_id')->references('id')->on('playlists');
            $table->foreign('track_id')->references('id')->on('tracks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_track');
    }
}
