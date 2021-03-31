<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Crypt;

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
            [
                'nipd' => $faker->randomNumber(),
                'tanggal_lahir' => '2021-11-12',
                'foto' => 'photos/default/no-avatar.png',
                'nama' => 'parallax',
                'password' => Hash::make('121121'),
                'passwordcrypt' => Crypt::encryptString('121121'),
                'kelamin' => 'l',
                'id_kelas' => '1',
            ], [
                'nipd' => $faker->randomNumber(),
                'tanggal_lahir' => '2020-11-12',
                'foto' => 'photos/default/no-avatar.png',
                'nama' => 'levi',
                'password' => Hash::make('121120'),
                'passwordcrypt' => Crypt::encryptString('121120'),
                'kelamin' => 'l',
                'id_kelas' => '2',
            ], [
                'nipd' => $faker->randomNumber(),
                'tanggal_lahir' => '2019-11-12',
                'foto' => 'photos/default/no-avatar.png',
                'nama' => 'putri',
                'password' => Hash::make('121119'),
                'passwordcrypt' => Crypt::encryptString('121119'),
                'kelamin' => 'p',
                'id_kelas' => '3',
            ]
        ]);
    }
}
