<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{
    protected $fillable = [
        'username'
    ];

    protected $hidden = [
        'password'
    ];

}
