<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    //
    protected $table = 'case';

    protected $fillable = [
        'skck_id','case_1', 'case_2', 'case_3','case_4','case_5'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
