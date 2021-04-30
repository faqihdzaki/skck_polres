<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couple extends Model
{
    //
    protected $table = 'couple';

    protected $fillable = [
        'skck_id','name', 'age', 'relegion','nationality','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

