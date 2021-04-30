<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $table = 'image';

    protected $fillable = [
        'skck_id','kk_image', 'ktp_image', 'your_image','fingerprint_image','profession','address'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

