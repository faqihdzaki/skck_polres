<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offense_EN extends Model
{
    //
    protected $table = 'offense_en';

    protected $fillable = [
        'skck_en_id','offense_1', 'offense_2', 'offense_3'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
