<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Systemuser extends Model
{
public $timestamps = false;
protected $table = 'tbl_users';
protected $fillable = [
'username', 'password',
'role_id','forlife_permission',
'yfc_permission','status','phone_number',
'pix','reset_tokken'
];
}
