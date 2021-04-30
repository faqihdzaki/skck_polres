<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $table = 'delivery';

    protected $fillable = [
        'user_id','name', 'address', 'no_telp'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
