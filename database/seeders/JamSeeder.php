<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('jam_masuk')->insert([
            'jam_masuk' => $faker->time($format = 'H:i:s', $max = 'now'),
            'jam_keluar' => $faker->time($format = 'H:i:s', $max = 'now'),
            'harimasuk' => $faker->date($format = 'Y-m-d', $max = 'now')
        ]);
    }
}
