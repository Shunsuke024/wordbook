<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '英語',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '社会',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '地理',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '世界史',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '日本史',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '理科',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '物理',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '化学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '国語',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        DB::table('categories')->insert([
            'name' => '数学',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        
    }
}
