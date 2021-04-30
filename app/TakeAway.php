<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TakeAway extends Model
{
    //
    protected $table = 'takeaway';

    protected $fillable = [
        'user_id','reason','skck_image','ktp_image','status','payment_image'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
