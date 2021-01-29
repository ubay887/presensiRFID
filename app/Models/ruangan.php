<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';
    protected $guarded = [];
    public function akses_ruangan()
    {
        return $this->hasMany(akses_ruangan::class, 'id_ruangan','id');
    }
    use HasFactory;
}
