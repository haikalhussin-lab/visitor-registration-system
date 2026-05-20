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
        $permission = Permission::create([
            'name' => 'index visitors',
            'name' => 'create visitors',
            'name' => 'edit visitors',
            'name' => 'delete visitors',
        ]);
        $role->givePermissionTo($permission);

        $user = User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@moh.gov.my',
            ]
        );
        $user->assignRole($role);
    }
}
