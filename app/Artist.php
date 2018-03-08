<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    //Mass Assigement
    protected  $fillable = [
        'name'
    ];
}
