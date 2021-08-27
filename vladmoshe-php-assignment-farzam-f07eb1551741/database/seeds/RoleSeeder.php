<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Super-Admin',
            'Admin',
            'Project-Manager',
            'Developer',
            'Driver'
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
