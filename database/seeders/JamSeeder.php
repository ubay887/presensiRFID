<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Factory as Faker;
class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        DB::table('jam_masuk')->insert([
            [
                'jam_masuk' => '07:15:00.000000',
                'jam_keluar' => '15:00:00.000000',
                'harimasuk' => 'mon,tue,wed,thu,fri,sat'
            ], [
                'jam_masuk' => '07:15:00.000000',
                'jam_keluar' => '12:00:00.000000',
                'harimasuk' => 'mon,wed,fri'
            ], [
                'jam_masuk' => '07:15:00.000000',
                'jam_keluar' => '12:00:00.000000',
                'harimasuk' => 'tue,thu,sat'
            ], [
                'jam_masuk' => '13:15:00.000000',
                'jam_keluar' => '17:00:00.000000',
                'harimasuk' => 'mon,wed,fri'
            ], [
                'jam_masuk' => '13:15:00.000000',
                'jam_keluar' => '17:00:00.000000',
                'harimasuk' => 'tue,thu,sat'
            ]
        ]);
        DB::table('tag_jamkelas')->insert([
            [
                'id_kelas' => 1,
                'id_jam' => 1
            ], [
                'id_kelas' => 2,
                'id_jam' => 2
            ], [
                'id_kelas' => 2,
                'id_jam' => 5
            ], [
                'id_kelas' => 3,
                'id_jam' => 3
            ], [
                'id_kelas' => 3,
                'id_jam' => 4
            ]
        ]);
    }
}
