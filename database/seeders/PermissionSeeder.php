<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // [
            //     'name' => 'brand_list',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'brand_create',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'brand_update',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'brand_delete',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'category_list',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'category_create',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'category_update',
            //     'guard_name' => 'web'
            // ],
            // [
            //     'name' => 'category_delete',
            //     'guard_name' => 'web'
            // ],

                [
                    'name' => 'user_list',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'user_create',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'user_update',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'user_delete',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'role_list',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'role_create',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'role_update',
                    'guard_name' => 'web'
                ],
                [
                    'name' => 'role_delete',
                    'guard_name' => 'web'
                ],

        ];

        Permission::insert($permissions);
    }
}
