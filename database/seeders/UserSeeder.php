<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'id_chat' => '794749920',
            'name' => 'dio selvinus silalebit',
            'email' => 'diselvinus@gmail.com',
            'gambar' => 'img/no-avatar.png',
            'password' => Hash::make('admin')
        ]);
    }
}
