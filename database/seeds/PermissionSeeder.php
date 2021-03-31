<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create admin user
        $adminUser = User::updateOrCreate([
            'id' => 1,
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => Hash::make(12345678),
        ]);

        //Create admin role
        $adminRole = Role::updateOrCreate([
            'name' => 'admin'
        ]);

        //Create default permissions
        $permissions = [
            'View',
            'Create',
            'Update',
            'Delete'
        ];

        foreach ($permissions as $perm_name) {
            Permission::updateOrCreate(['name' => $perm_name]);
        }

        //Getting all permissions and assign roles to user
        $permissions = Permission::all();

        $adminRole->permissions()->sync($permissions->pluck('id')->toArray());
        $adminUser->roles()->sync($adminRole->pluck('id')->toArray());
    }
}
