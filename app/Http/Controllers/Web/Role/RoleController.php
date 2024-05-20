<?php

namespace App\Http\Controllers\Web\Role;

use Illuminate\Http\Request;
use App\Services\Role\RoleService;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    protected $roleService;

    public function __construct(
        RoleService $roleService
    )
    {
        // $this->middleware(['permission:role_list|role_create|role_update|role_delete']);
        $this->roleService = $roleService;
    }

    public function index()
    {
        $roles = $this->roleService->getAllRole();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('role.create')->with(['permissions'=>$permissions]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'permissions.*'=>'required'
        ]);

        $role = $this->roleService->storeRole($data);

        return redirect()->route('roles.index')->withSuccess('Role Created Successfully.');
    }

    public function edit($id)
    {
        $permissions = Permission::all();

        $role = $this->roleService->editRole($id);
        return view('role.edit')->with(['role'=>$role ,'permissions'=>$permissions]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>'required',
            'permissions.*'=>'required'
        ]);

        $role = $this->roleService->updateRole($data, $id);

        return redirect()->route('roles.index')->withSuccess('Role Updated Successfully');
    }

    public function destroy($id)
    {
        $role = $this->roleService->deleteRole($id);

        return redirect()->route('roles.index')->withSuccess('Role is deleted Successfully');
    }

}
