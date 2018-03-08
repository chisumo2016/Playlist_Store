<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class playslistTracks extends Model
{
    //
    //Mass Assigement
    protected  $fillable = [
        'playlist_id',
        'track_id'
    ];
}
