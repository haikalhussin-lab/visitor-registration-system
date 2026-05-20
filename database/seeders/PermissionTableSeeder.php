<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);

        $permissionNames = [
            'index visitors',
            'create visitors',
            'edit visitors',
            'delete visitors',
        ];

        foreach ($permissionNames as $name) {
            Permission::create(['name' => $name]);
        }

        $role->givePermissionTo($permissionNames);  

        $user = User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@moh.gov.my',
            ]
        );
        $user->assignRole('admin');
    }
}
