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
        DB::table('guru')->insert([[
            'email' => $faker->email,
            'username' => 'guru',
            'nama' => 'sharrone',
            'password' => Hash::make('guru'),
            'role' => 'wali kelas',
            'kelamin' => 'p',
            'foto' => 'photos/default/no-avatar.png',
        ], [
            'email' => $faker->email,
            'username' => 'guru1',
            'nama' => 'shana',
            'password' => Hash::make('guru1'),
            'role' => 'wali kelas',
            'kelamin' => 'p',
            'foto' => 'photos/default/no-avatar.png',
        ], [
            'email' => $faker->email,
            'username' => 'guru2',
            'nama' => 'wana',
            'password' => Hash::make('guru2'),
            'role' => 'wali kelas',
            'kelamin' => 'l',
            'foto' => 'photos/default/no-avatar.png',
        ], [
            'email' => $faker->email,
            'username' => 'guru3',
            'nama' => 'wati',
            'password' => Hash::make('guru3'),
            'role' => 'kesiswaan',
            'kelamin' => 'p',
            'foto' => 'photos/default/no-avatar.png',
        ]]);
    }
}
