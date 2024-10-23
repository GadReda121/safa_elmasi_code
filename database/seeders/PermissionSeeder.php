<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // offers
            [
                'display_name' => 'create',
                'name' => 'offers_create',
                'guard_name' => 'web',
                'group' => 'offers',
                'routes' => 'offers.create,offers.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'offers_read',
                'guard_name' => 'web',
                'group' => 'offers',
                'routes' => 'offers.index,offers.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'offers_update',
                'guard_name' => 'web',
                'group' => 'offers',
                'routes' => 'offers.update,offers.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'offers_delete',
                'guard_name' => 'web',
                'group' => 'offers',
                'routes' => 'offers.destroy',
            ],
            // categories
            [
                'display_name' => 'create',
                'name' => 'categories_create',
                'guard_name' => 'web',
                'group' => 'categories',
                'routes' => 'categories.create,categories.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'categories_read',
                'guard_name' => 'web',
                'group' => 'categories',
                'routes' => 'categories.index,categories.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'categories_update',
                'guard_name' => 'web',
                'group' => 'categories',
                'routes' => 'categories.update,categories.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'categories_delete',
                'guard_name' => 'web',
                'group' => 'categories',
                'routes' => 'categories.destroy',
            ],
            // reservations
            [
                'display_name' => 'create',
                'name' => 'reservations_create',
                'guard_name' => 'web',
                'group' => 'reservations',
                'routes' => 'reservations.create,reservations.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'reservations_read',
                'guard_name' => 'web',
                'group' => 'reservations',
                'routes' => 'reservations.index,reservations.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'reservations_update',
                'guard_name' => 'web',
                'group' => 'reservations',
                'routes' => 'reservations.update,reservations.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'reservations_delete',
                'guard_name' => 'web',
                'group' => 'reservations',
                'routes' => 'reservations.destroy',
            ],
            // partners
            [
                'display_name' => 'create',
                'name' => 'partners_create',
                'guard_name' => 'web',
                'group' => 'partners',
                'routes' => 'partners.create,partners.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'partners_read',
                'guard_name' => 'web',
                'group' => 'partners',
                'routes' => 'partners.index,partners.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'partners_update',
                'guard_name' => 'web',
                'group' => 'partners',
                'routes' => 'partners.update,partners.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'partners_delete',
                'guard_name' => 'web',
                'group' => 'partners',
                'routes' => 'partners.destroy',
            ],
            // users
            [
                'display_name' => 'create',
                'name' => 'users_create',
                'guard_name' => 'web',
                'group' => 'users',
                'routes' => 'users.create,users.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'users_read',
                'guard_name' => 'web',
                'group' => 'users',
                'routes' => 'users.index,users.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'users_update',
                'guard_name' => 'web',
                'group' => 'users',
                'routes' => 'users.update,users.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'users_delete',
                'guard_name' => 'web',
                'group' => 'users',
                'routes' => 'users.destroy',
            ],
            // roles
            [
                'display_name' => 'create',
                'name' => 'roles_create',
                'guard_name' => 'web',
                'group' => 'roles',
                'routes' => 'roles.create,roles.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'roles_read',
                'guard_name' => 'web',
                'group' => 'roles',
                'routes' => 'roles.index,roles.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'roles_update',
                'guard_name' => 'web',
                'group' => 'roles',
                'routes' => 'roles.update,roles.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'roles_delete',
                'guard_name' => 'web',
                'group' => 'roles',
                'routes' => 'roles.destroy',
            ],

            // client-types
            [
                'display_name' => 'create',
                'name' => 'client_types_create',
                'guard_name' => 'web',
                'group' => 'client_types',
                'routes' => 'client-types.create,client-types.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'client_types_read',
                'guard_name' => 'web',
                'group' => 'client_types',
                'routes' => 'client-types.index,client-types.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'client_types_update',
                'guard_name' => 'web',
                'group' => 'client_types',
                'routes' => 'client-types.update,client-types.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'client_types_delete',
                'guard_name' => 'web',
                'group' => 'client_types',
                'routes' => 'client-types.destroy',
            ],
            // defined_messages

            [
                'display_name' => 'create',
                'name' => 'defined_messages_create',
                'guard_name' => 'web',
                'group' => 'defined_messages',
                'routes' => 'defined-messages.create,defined-messages.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'defined_messages_read',
                'guard_name' => 'web',
                'group' => 'defined_messages',
                'routes' => 'defined-messages.index,defined-messages.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'defined_messages_update',
                'guard_name' => 'web',
                'group' => 'defined_messages',
                'routes' => 'defined-messages.update,defined-messages.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'defined_messages_delete',
                'guard_name' => 'web',
                'group' => 'defined_messages',
                'routes' => 'defined-messages.destroy',
            ],
            // messages
            [
                'display_name' => 'create',
                'name' => 'messages_create',
                'guard_name' => 'web',
                'group' => 'messages',
                'routes' => 'messages.create,messages.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'messages_read',
                'guard_name' => 'web',
                'group' => 'messages',
                'routes' => 'messages.index,messages.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'messages_update',
                'guard_name' => 'web',
                'group' => 'messages',
                'routes' => 'messages.update,messages.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'messages_delete',
                'guard_name' => 'web',
                'group' => 'messages',
                'routes' => 'messages.destroy',
            ],
            // recruiters
            [
                'display_name' => 'create',
                'name' => 'recruiters_create',
                'guard_name' => 'web',
                'group' => 'recruiters',
                'routes' => 'recruiters.create,recruiters.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'recruiters_read',
                'guard_name' => 'web',
                'group' => 'recruiters',
                'routes' => 'recruiters.index,recruiters.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'recruiters_update',
                'guard_name' => 'web',
                'group' => 'recruiters',
                'routes' => 'recruiters.update,recruiters.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'recruiters_delete',
                'guard_name' => 'web',
                'group' => 'recruiters',
                'routes' => 'recruiters.destroy',
            ],
            // countries
            [
                'display_name' => 'create',
                'name' => 'countries_create',
                'guard_name' => 'web',
                'group' => 'countries',
                'routes' => 'countries.create,countries.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'countries_read',
                'guard_name' => 'web',
                'group' => 'countries',
                'routes' => 'countries.index,countries.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'countries_update',
                'guard_name' => 'web',
                'group' => 'countries',
                'routes' => 'countries.update,countries.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'countries_delete',
                'guard_name' => 'web',
                'group' => 'countries',
                'routes' => 'countries.destroy',
            ],
            // jobs
            [
                'display_name' => 'create',
                'name' => 'jobs_create',
                'guard_name' => 'web',
                'group' => 'jobs',
                'routes' => 'jobs.create,jobs.store',
            ],
            [
                'display_name' => 'read',
                'name' => 'jobs_read',
                'guard_name' => 'web',
                'group' => 'jobs',
                'routes' => 'jobs.index,jobs.show',
            ],
            [
                'display_name' => 'update',
                'name' => 'jobs_update',
                'guard_name' => 'web',
                'group' => 'jobs',
                'routes' => 'jobs.update,jobs.edit',
            ],
            [
                'display_name' => 'delete',
                'name' => 'jobs_delete',
                'guard_name' => 'web',
                'group' => 'jobs',
                'routes' => 'jobs.destroy',
            ],
        ];

        foreach ($data as $permission) {
            if (\Spatie\Permission\Models\Permission::where('name', $permission['name'])->first()) {
                continue;
            }
            \Spatie\Permission\Models\Permission::create($permission);
        }
    }
}
