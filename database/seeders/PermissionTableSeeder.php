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





        // create a user with role subadmin that has permission to index visitors, create visitors
        $subadmin = User::firstOrCreate(
            ['email' => 'subadmin@moh.gov.my'],
            [
                'name' => 'Subadmin',
                'password' => Hash::make('password'),
            ]
        );
        $role = Role::firstOrCreate(
            ['name' => 'subadmin', 'guard_name' => 'web']
        );
        $role->syncPermissions(['index visitors', 'create visitors']);
        $subadmin->assignRole($role);

        $pegawai = User::firstOrCreate(
            ['email' => 'pegawai@moh.gov.my'],
            [
                'name' => 'Pegawai',
                'password' => Hash::make('password'),
            ]
        );
        $role = Role::firstOrCreate(
            ['name' => 'pegawai', 'guard_name' => 'web']
        );
        $pegawai->assignRole($role);
        $pegawai->givePermissionTo('index visitors');
        $pegawai->givePermissionTo('delete visitors');
    }
}