<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            [
                'quotes' => 'Veni, vidi, vici',
                'creator' => 'Julius Caesar'
            ],
            [
                'quotes' => 'Apa yang ada di belakang kita dan apa yang ada di depan kita adalah hal-hal kecil dibandingkan dengan apa yang ada di dalam kita.',
                'creator' => 'Ralph Waldo Emerson'
            ]
        ]);
    }
}
