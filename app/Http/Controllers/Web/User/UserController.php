<?php

namespace App\Http\Controllers\Web\User;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Hash;

class  UserController extends Controller
{
    protected $userService;

    public function __construct(
        UserService $userService
    )
    {
        $this->middleware(['permission:user_list|user_create|user_update|user_delete']);
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUser();
        return view('user.index')->with(['users'=>$users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create')->with(['roles'=>$roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'role_id'=>'required'
        ]);


        $user = $this->userService->storeUser($request);

        return redirect()->route('users.index')->withSuccess('User Created Successfully.');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = $this->userService->editUser($id);
        return view('user.edit')->with(['user'=>$user,'roles'=>$roles]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            // 'password'=>'nullable',
            'role_id'=>'required'
        ]);
        // dd($data);

        $user = $this->userService->updateUser($request, $id);

        return redirect()->route('users.index')->withSuccess('User Data Updated Successfully.');
    }

    public function destroy($id)
    {

        $user = $this->userService->deleteUser($id);

        return redirect()->route('users.index')->withSuccess('User deleted successfully.');
    }
}
