<?php

namespace App\Services\Admin;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminService
{
    public function getallAdmin()
    {
        $admins = User::all();
        return $admins;
    }

    public function storeAdmin($data)
    {
        try{

            DB::beginTransaction();

            $admin = User::create($data);

            // $role = Role::findOrFail('role_id');

            // $admin->assignRole($role->name);

            DB::commit();
        }catch(Exception $exception)
        {
            DB::rollback();
        }
        return $admin;
    }
}
