<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'admins';


    protected $fillable = [
        'nama',
        'username',
        'password',
        'role',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
