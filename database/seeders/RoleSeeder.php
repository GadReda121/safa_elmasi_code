<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create roles
        $roles = [
            'admin',
        ];

        foreach ($roles as $role) {
            $model = \Spatie\Permission\Models\Role::updateOrCreate(['name' => $role, 'guard_name' => 'web']);

            foreach (\Spatie\Permission\Models\Permission::all() as $permission) {
                $model->givePermissionTo($permission);
            }
        }
    }
}
