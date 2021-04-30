<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';

    protected $fillable = [
        'skck_id','name', 'year'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
