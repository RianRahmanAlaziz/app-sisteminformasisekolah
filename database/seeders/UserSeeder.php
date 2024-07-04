<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin'),
                'email_verified_at' => now()
            ]
        );
        $roleAdmin = Role::updateOrCreate(
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Admin'
            ]
        );
        $roleguru = Role::updateOrCreate(
            [
                'name' => 'Guru'
            ],
            [
                'name' => 'Guru'
            ]
        );
        $permission = Permission::updateOrCreate(
            [
                'name' => 'viewAdmin'
            ],
            [
                'name' => 'viewAdmin'
            ]
        );
        $permission1 = Permission::updateOrCreate(
            [
                'name' => 'viewGuru'
            ],
            [
                'name' => 'viewGuru'
            ]
        );
        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'viewWmurid'
            ],
            [
                'name' => 'viewWmurid'
            ]
        );
        $roleAdmin->givePermissionTo($permission);
        $admin = User::find(1);
        $admin->assignRole('Admin');
    }
}
