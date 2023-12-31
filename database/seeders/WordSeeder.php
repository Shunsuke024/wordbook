<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
                'user_id' => '1',
                'category_id' => '1',
                'word_left' => 'apple',
                'word_right'=> 'りんご',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
