<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guard = 'siswa';
    protected $fillable = [
        'nama',
        'kelamin',
        'password',
        'tanggal_lahir',
        'nipd',
    ];
    protected $guarded = [];
    public function idKelas(){
        return $this->belongsTo(kelas::class,'id_kelas');
    }
}
