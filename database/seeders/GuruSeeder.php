<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Crypt;

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
            [
                'email' => $faker->email,
                'username' => 'guru',
                'nama' => 'sharrone',
                'password' => Hash::make('guru'),
                'passwordcrypt' => Crypt::encryptString('guru'),
                'role' => 'wali kelas',
                'kelamin' => 'p',
                'foto' => 'photos/default/no-avatar.png',
            ], [
                'email' => $faker->email,
                'username' => 'guru1',
                'nama' => 'shana',
                'password' => Hash::make('guru1'),
                'passwordcrypt' => Crypt::encryptString('guru1'),
                'role' => 'wali kelas',
                'kelamin' => 'p',
                'foto' => 'photos/default/no-avatar.png',
            ], [
                'email' => $faker->email,
                'username' => 'guru2',
                'nama' => 'wana',
                'password' => Hash::make('guru2'),
                'passwordcrypt' => Crypt::encryptString('guru2'),
                'role' => 'wali kelas',
                'kelamin' => 'l',
                'foto' => 'photos/default/no-avatar.png',
            ], [
                'email' => $faker->email,
                'username' => 'guru3',
                'nama' => 'wati',
                'password' => Hash::make('guru3'),
                'passwordcrypt' => Crypt::encryptString('guru3'),
                'role' => 'kesiswaan',
                'kelamin' => 'p',
                'foto' => 'photos/default/no-avatar.png',
            ]
        ]);
    }
}
