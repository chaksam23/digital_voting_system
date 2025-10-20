<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    
    public $table = 'voter_list';
    protected $fillable = ['name', 'mobile', 'email', 'password', 'cpassword', 'photo'];
    public $timestamps = true;
}

