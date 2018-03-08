<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackArtists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('track_id')->unsigned();
            $table->integer('artist_id')->unsigned();
            $table->timestamps();

            $table->foreign('track_id')->references('id')->on('tracks');
            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trackArtists');
    }
}
