<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrtherInformation extends Model
{
    //
    protected $table = 'orther_information';

    protected $fillable = [
        'skck_id','profession_history', 'hoby','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
