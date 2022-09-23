<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $user->roles()->attach(1);


        $roles = Role::all();
        User::all()->each(function ($user) use ($roles) {
            $user->roles()->attach(
                $roles->random(1)->pluck('id')
            );
        });
    }
}
