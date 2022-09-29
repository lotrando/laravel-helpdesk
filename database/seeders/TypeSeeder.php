<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'HPP'
        ]);

        DB::table('types')->insert([
            'name' => 'DPP'
        ]);

        DB::table('types')->insert([
            'name' => 'DPČ'
        ]);
    }
}
