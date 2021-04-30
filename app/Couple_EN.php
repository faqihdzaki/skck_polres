<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couple_EN extends Model
{
    //
    protected $table = 'couple_en';

    protected $fillable = [
        'skck_en_id','name', 'age', 'relegion','nationality','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

