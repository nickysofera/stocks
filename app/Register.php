<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'no_hp_email',
        'jenis_kelamin'
      ];

/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'register';
    }
