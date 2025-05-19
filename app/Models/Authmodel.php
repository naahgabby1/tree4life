<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Authmodel extends Authenticatable
{
    protected $table = 'logindetails';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
