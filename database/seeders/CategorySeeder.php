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
            'category_name' => 'Počítač'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Tiskárna'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Údržba'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Úklid'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Zdravotnický prostředek'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Recepce'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Stravovací provoz'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Náměty'
        ]);
    }
}
