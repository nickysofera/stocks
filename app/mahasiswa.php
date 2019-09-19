<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [

    'mahasiswa_first_name',
    'mahasiswa_last_name',
    'mahasiswa_no_hp_email',
    'mahasiswa_gender',
    // 'dropdown'
    ];

}
