<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'username',
        'photo',
        'email',
        'phone',
        'role_id',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    


}
