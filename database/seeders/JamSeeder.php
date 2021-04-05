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
                'harimasuk' => 'Mon,Tue,Wed,Thu,Fri,Sat',
            ], [
                'jam_masuk' => '07:15:00.000000',
                'jam_keluar' => '12:00:00.000000',
                'harimasuk' => 'Mon,Wed,Fri',
            ], [
                'jam_masuk' => '07:15:00.000000',
                'jam_keluar' => '12:00:00.000000',
                'harimasuk' => 'Tue,Thu,Sat',
            ], [
                'jam_masuk' => '13:15:00.000000',
                'jam_keluar' => '17:00:00.000000',
                'harimasuk' => 'Mon,Wed,Fri',
            ], [
                'jam_masuk' => '13:15:00.000000',
                'jam_keluar' => '17:00:00.000000',
                'harimasuk' => 'Tue,Thu,Sat',
            ],
        ]);
        DB::table('tag_jamkelas')->insert([
            [
                'id_kelas' => 1,
                'id_jam' => 1,
            ], [
                'id_kelas' => 2,
                'id_jam' => 2,
            ], [
                'id_kelas' => 2,
                'id_jam' => 5,
            ], [
                'id_kelas' => 3,
                'id_jam' => 3,
            ], [
                'id_kelas' => 3,
                'id_jam' => 4,
            ], [
                'id_kelas' => 4,
                'id_jam' => 1,
            ], [
                'id_kelas' => 7,
                'id_jam' => 1,
            ], [
                'id_kelas' => 5,
                'id_jam' => 2,
            ], [
                'id_kelas' => 5,
                'id_jam' => 5,
            ], [
                'id_kelas' => 6,
                'id_jam' => 3,
            ], [
                'id_kelas' => 6,
                'id_jam' => 4,
            ], [
                'id_kelas' => 8,
                'id_jam' => 3,
            ], [
                'id_kelas' => 8,
                'id_jam' => 4,
            ], [
                'id_kelas' => 9,
                'id_jam' => 2,
            ], [
                'id_kelas' => 9,
                'id_jam' => 5,
            ],
        ]);
    }
}
