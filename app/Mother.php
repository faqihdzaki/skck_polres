<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    //
    protected $table = 'mother';

    protected $fillable = [
        'skck_id','name', 'age', 'relegion','nationality','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
