<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = [];
    public function getSiswa()
    {
        return $this->hasMany(siswa::class, 'id_kelas', 'id');
    }
    public function getGuru()
    {
        return $this->belongsTo(guru::class, 'id_guru');
    }
}
