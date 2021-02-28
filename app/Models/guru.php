<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class guru extends Authenticable
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'guru';
    protected $table = 'guru';
    protected $fillable = [
        'nama', 'email', 'kelamin', 'email_verfied_at', 'password', 'username'
    ];
    protected $hidden = ['password'];
}
