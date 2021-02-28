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
                
                'kelas' => 'X RPL 1',
                'id_guru' => '1'
            ],
            [
                
                'kelas' => 'XI RPL 1',
                'id_guru' => '1'
            ],
            [
                
                'kelas' => 'XII RPL 1',
                'id_guru' => '1'
            ]
        ]);
    }
}
