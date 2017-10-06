<?php

namespace Api\Endpoints\Users\Models;

use Api\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
    protected $hidden = ['password'];
}