<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'admin';
    protected $guard = 'admin';
    protected $fillable = [
        'nama', 'password', 'username','idchat'
    ];
    protected $hidden = ['password'];
}
