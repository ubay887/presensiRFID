<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'zona' => 'Asia/Jakarta',
            'jam_masuk_1' => '00:00:00',
            'jam_masuk_2' => '00:00:00',
            'jam_masuk_3' => '00:00:00',
            'jam_pulang_1' => '00:00:00',
            'jam_pulang_2' => '00:00:00',
            'jam_pulang_3' => '00:00:00',
            'token' => '1424505367:AAHoe9YTdfend4sBG6YcAAxVOWiOYzM3BKI',
            'key_api' => 'abc123',
            'SW' => '1',
            'sw_2' => '1'
        ]);
    }
}
