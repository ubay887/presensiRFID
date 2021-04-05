<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jam extends Model
{
    use HasFactory;
    protected $table = 'jam_masuk';
    protected $casts = [
        'jam_masuk' => 'datetime:H:i',
        'jam_keluar' => 'datetime:H:i',
    ];

    public function getKelasInTagJam()
    {
        $data = array();
        foreach (tagjam::where('id_jam', $this->id)->get('id_kelas') as $key) {
            $data[] = kelas::where('id', $key['id_kelas'])->first()->kelas;
        }
        return $data;
    }

    public function getKelasInJam()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }

    public function getHariMasuk()
    {
        return explode(',', $this->harimasuk);
    }
}
