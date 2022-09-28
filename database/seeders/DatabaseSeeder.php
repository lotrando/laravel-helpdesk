<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            DepartmentSeeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            JobSeeder::class,
            ProgramSeeder::class,
        ]);
    }
}
