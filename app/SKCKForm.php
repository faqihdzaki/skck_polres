<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKCKForm extends Model
{
    protected $table = 'skckform';

    protected $fillable = [
        'user_id', 
        'name', 
        'born', 
        'date', 
        'relegion', 
        'nationality', 
        'gender', 
        'profession', 
        'address', 
        'nik', 
        'no_passport', 
        'no_kita_kitap', 
        'no_telp', 
        'kk_image', 
        'ktp_image', 
        'your_image', 
        'fingerprint_image', 
        'status'
    ];


    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
