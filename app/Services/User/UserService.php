<?php

namespace App\Services\User;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getAllUser()
    {
        $users = User::with('role')->get();
        return $users;
    }

    public function storeUser($request)
    {
        try
        {
            DB::beginTransaction();

            $data = $request->all();

            $data['password'] = Hash::make($data['password']);

            $user = User::create($data);

            $role = Role::findOrFail($user['role_id']);

            $user = $user->assignRole($role->name);

            DB::commit();
        }catch(Exception $exception){
            DB::rollBack();
        }
        return $user;
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);

        return $user;
    }

    public function updateUser($request, $id)
    {
        try{
            DB::beginTransaction();

            $data = $request->all();

            $data['password'] = Hash::make($data['password']);

            $user = User::findOrFail($id);

            $user->update($data);

            $role = Role::findOrFail($user['role_id']);

            $user->syncRoles($role->name);

            DB::commit();

            return $user;


        }catch(Exception $request)
        {
            DB::rollBack();
        }
        return $user;
    }

    public function deleteUser($id)
    {
        try
        {
            DB::beginTransaction();

            $user = User::findOrFail($id);

            $user->delete();

            DB::commit();

        }catch(Exception $exception)
        {
            DB::rollBack();
        }
        return $user;
    }
}
