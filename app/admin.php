<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin  extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'firstname', 'lastname', 'email', 'password','email_verfied_at'
    ];

    protected $hidden = ['password'];


}
