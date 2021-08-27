<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
//        $this->middleware('permission:role-create', ['only' => ['create','store']]);
//        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
//    }
    public function index()
    {
        $roles=Role::all();
        return $roles;
    }
    public function create(Request $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return 'success Role created successfully';
    }
    public function giveP(Request $request, $id)
    {
        $role=Role::find($id);
        $role->givePermissionTo($request->input('permission'));
        return "Permission Added";

    }
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return array($role,$rolePermissions);
    }
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return $role->with($permission)->with($rolePermissions);
    }
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return "Successfully Updated";
    }
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return 'Role deleted successfully';
    }

}
