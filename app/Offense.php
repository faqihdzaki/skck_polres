<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offense extends Model
{
    //
    protected $table = 'offense';

    protected $fillable = [
        'skck_id','offense_1', 'offense_2', 'offense_3'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
