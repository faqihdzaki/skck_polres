<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_EN extends Model
{
    protected $table = 'school_en';

    protected $fillable = [
        'skck_en_id','name', 'year'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
