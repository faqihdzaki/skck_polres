<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKCKForm_EN extends Model
{
    
    protected $table = 'skckform_en';

    protected $fillable = [
        'user_id','name', 'born', 'date', 'relegion','nationality','gender','profession','address','no_passport','no_kita_kitap','no_telp','kk_image','your_image','fingerprint_image','status'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
