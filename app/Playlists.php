<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    //
    //Mass Assigement

    protected  $fillable = [
        'name'
    ];
    public $timestamps = false;

}

