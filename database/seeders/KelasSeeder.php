<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            [
                
                'kelas' => 'X Rekayasa Perangkat Lunak 1',
                'id_guru' => '1'
            ],
            [
                
                'kelas' => 'XI Rekayasa Perangkat Lunak 1',
                'id_guru' => '2'
            ],
            [
                
                'kelas' => 'XII Rekayasa Perangkat Lunak 1',
                'id_guru' => '3'
            ]
        ]);
    }
}
