<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    //
    protected $table = 'father';

    protected $fillable = [
        'skck_id','name', 'age', 'relegion','nationality','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
