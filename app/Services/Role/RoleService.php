<?php

namespace App\Services\Role;

use Exception;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleService
{
    public function getAllRole()
    {
        $roles = Role::all();
        return $roles;
    }

    public function storeRole($data)
    {
        try{
            DB::beginTransaction();

            $permissions = $data['permissions'];

            $role = Role::create($data);

            $role->givePermissionTo($permissions);


            DB::commit();
        }catch(Exception $exception){
            DB::rollback();
        }
        return $role;
    }

    public function editRole($id)
    {
        $role = Role::findOrFail($id);

        return $role;
    }

    public function updateRole($data, $id)
    {
        try{
            DB::beginTransaction();

            $permissions = $data['permissions'];

            $role = Role::findOrFail($id);

            $role->update($data);

            $role->syncPermissions($permissions);

            DB::commit();

        }catch(Exception $exception)
        {
            DB::rollBack();
        }
        return $role;
    }

    public function deleteRole($id)
    {
        try{
            DB::beginTransaction();

            $role = Role::findOrFail($id);

            $role->delete();

            DB::commit();
        }catch(Exception $exception)
        {
            DB::rollBack();
        }
    }
}
