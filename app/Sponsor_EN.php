<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor_EN extends Model
{
    protected $table = 'sponsor';

    protected $fillable = [
        'skck_en_id','name','address','no_telp','type'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
