<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class voter extends Model
{
    public $table = 'voter_id';
    protected $fillable = ['voter_name', 'voter_phone', 'voter_password', 'group'];
    public $timestamps = true;
}
// {
//     public $table = 'voter_list';
//     protected $fillable = ['name', 'mobile', 'email', 'password', 'cpassword', 'photo'];
//     public $timestamps = true;
// }
