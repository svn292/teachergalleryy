<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $role = new Role();
        $role->name = "Admin";
        $role->save(); 
        $role = new Role();
        $role->name = "Student";
        $role->save();
        $role = new Role();
        $role->name = "Teacher";
        $role->save();
        $role = new Role();
        $role->name = "Publisher";
        $role->save();
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('123456');
        $user->role_id = 1;
        $user->save();

        

    }
}
