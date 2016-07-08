<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firs_name', 'last_name', 'phone1', 'email1', 'location',
    ];
}
