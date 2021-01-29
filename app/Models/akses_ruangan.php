<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akses_ruangan extends Model
{
    protected $table = 'akses_ruangan';
    protected $guarded = [];
    public function ruangan()
    {
        return $this->belongsTo(ruangan::class, 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id');
    }
    use HasFactory;
}
