<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'view-companies']);
        Permission::create(['name' => 'create-companies']);
        Permission::create(['name' => 'edit-companies']);
        Permission::create(['name' => 'delete-companies']);

        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'Admin']);
        $managerRole = Role::create(['name' => 'Manager']);
        Role::create(['name' => 'Employee']);

        $adminRole->givePermissionTo([
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
        ]);

        $managerRole->givePermissionTo([
            'view-users',
            'create-users',
            'edit-users',
        ]);
    }
}
