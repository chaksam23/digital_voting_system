<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'voter_login';
    protected $fillable = [
        'name',
        'fname',
        'voter_id',
        'phone',
        'address',
    ];
}
