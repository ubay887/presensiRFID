<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class siswa extends Authenticable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'siswa';
    protected $guard = 'siswa';
    protected $fillable = [
        'nama',
        'kelamin',
        'password',
        'tanggal_lahir',
        'password',
        'nipd',
        'foto',
        'id_kelas',
    ];
    protected $guarded = [];
    protected $hidden = ['password'];
    public function idKelas(){
        return $this->belongsTo(kelas::class,'id_kelas');
    }
}
