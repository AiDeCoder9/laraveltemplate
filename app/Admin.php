<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Admin as Authenticable;
class Admin extends Authenticable
{
    use Notifiable;

    protected $guard ='admin';

    protected $fillable=[
        'name','email','password','task'
    ];
    protected $hidden =[
        'password','remember_token'
    ];

}


