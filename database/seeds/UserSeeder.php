<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Populate fake users
        User::factory()->count(10)->create();

        //Get all the roles syncing up to 3 random roles to each user except user_id=1('admin')
        $roles = Role::all();

        //Get all the permissions syncing up to random permissions to each role except role_id=1('admin')
        $permissions = Permission::all();

        //Populate the pivot table 'role_user'
        User::where('id', '!=', 1)->get()->each(function ($user) use ($roles) {
            $user->roles()->sync(
                $roles->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        //Populate the pivot table 'permission_role'
        Role::where('id', '!=', 1)->get()->each(function ($role) use ($permissions) {
            $role->permissions()->sync(
                $permissions->random(rand(1, 4))->pluck('id')->toArray()
            );
        });
    }
}
