<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faults')->insert([
            'name' => 'Electro',
            'category' => 'maintenance'
        ]);

        DB::table('faults')->insert([
            'name' => 'Water',
            'category' => 'maintenance'
        ]);

        DB::table('faults')->insert([
            'name' => 'Computer',
            'category' => 'it'
        ]);

        DB::table('faults')->insert([
            'name' => 'Printer',
            'category' => 'it'
        ]);
    }
}
