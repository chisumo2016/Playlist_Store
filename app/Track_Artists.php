<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trackArtists extends Model
{
    //
    //Mass Assigement
    protected  $fillable = [
        'track_id',
        'artist_id'
    ];
}
