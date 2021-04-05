<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagjam extends Model
{
    use HasFactory;
    protected $table = 'tag_jamkelas';
    public function getJam()
    {
        return $this->belongsTo(jam::class, 'id_jam');
    }
    public function getKelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }
}
