<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangan')->insert([[
            'ruangan' => 'ruangan 1'
        ], [
            'ruangan' => 'ruangan 2'
        ], [
            'ruangan' => 'ruangan 3'
        ], [
            'ruangan' => 'ruangan 4'
        ], [
            'ruangan' => 'ruangan 5'
        ]]);
    }
}
