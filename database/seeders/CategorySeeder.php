<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'category_name' => 'it'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'maintenance'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'medical'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'suggestion'
        ]);
    }
}
