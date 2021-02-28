<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('siswa')->insert([
            'nipd' => $faker->randomNumber(),
            'tanggal_lahir' => $faker->dateTime($max = 'now', $timezone = null),
            'foto' => 'photos/default/no-avatar.png',
            'nama' => 'parallax',
            'kelamin' => 'l',
            'id_kelas' => '1',
        ]);
    }
}
