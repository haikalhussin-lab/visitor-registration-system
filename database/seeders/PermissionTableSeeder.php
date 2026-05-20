<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        $permissionNames = [
            'index visitors',
            'create visitors',
            'edit visitors',
            'delete visitors',

            'index users',
            'create users',
            'edit users',
            'delete users',

            'index blogs',
            'create blogs',
            'edit blogs',
            'delete blogs',
        ];

        $permissions = collect($permissionNames)->map(
            fn (string $name) => Permission::firstOrCreate(
                ['name' => $name, 'guard_name' => 'web']
            )
        );

        $role->syncPermissions($permissions);

        $user = User::firstOrCreate(
            ['email' => 'admin@moh.gov.my'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole($role);
    }
}