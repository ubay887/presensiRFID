<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = [];
    public function siswa()
    {
        return $this->hasMany(siswa::class, 'id_kelas', 'id');
    }
}
