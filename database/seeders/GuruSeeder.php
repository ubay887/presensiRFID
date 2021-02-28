<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('guru')->insert([
            'email' => $faker->email,
            'username' => 'guru',
            'nama' => 'sharrone',
            'password' => Hash::make('guru'),
            'role' => 'wali kelas',
            'kelamin' => 'p',
            'foto' => 'photos/default/no-avatar.png',
        ]);
    }
}
