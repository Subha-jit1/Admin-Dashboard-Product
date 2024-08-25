<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'message',
                'permissions' => [
                    'message.view', 
                ]
            ],
            [
                'group_name' => 'search',
                'permissions' => [
                    'search.search', 
                ]
            ],
        ];

        foreach($permissions as $permissionGroup) { 
            foreach($permissionGroup['permissions'] as $permission) {
                Permission::create([
                    'name' => $permission,
                    'guard_name' => 'web', 
                    'group_name' => $permissionGroup['group_name'],
                ]);
            }

        }

        $roles = ['SUPER-ADMIN', 'ADMIN'];

        foreach($roles as $role){
            $createdRole = Role::create([
                'name' => $role,
                'guard_name' => 'web', 
            ]);
            $createdRole->givePermissionTo('dashboard.view');
        }
    }
}
