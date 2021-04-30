<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrtherInformation_EN extends Model
{
    //
    protected $table = 'orther_information_en';

    protected $fillable = [
        'skck_en_id','profession_history', 'hoby','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
