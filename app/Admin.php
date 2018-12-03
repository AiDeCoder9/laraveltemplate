<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;
use App\Notifications\AdminResetPasswordNotification;

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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

}


