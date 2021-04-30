<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father_EN extends Model
{
    //
    protected $table = 'father_en';

    protected $fillable = [
        'skck_en_id','name', 'age', 'relegion','nationality','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
