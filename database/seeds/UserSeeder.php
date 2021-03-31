<?php

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
    }
}
