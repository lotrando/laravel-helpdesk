<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        User::factory()->create([
            'personal_number' => 'admin',
            'name' => 'Administrator',
            'email' => 'klika@khn.cz',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);

        User::factory()->count(150)->create();
    }
}
