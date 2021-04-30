<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sibling_EN extends Model
{
    //
    protected $table = 'sibling_en';

    protected $fillable = [
        'skck_en_id','name', 'age','address','occupation'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
