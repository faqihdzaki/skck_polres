<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    //
    protected $table = 'sibling';

    protected $fillable = [
        'skck_id','name', 'age','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
