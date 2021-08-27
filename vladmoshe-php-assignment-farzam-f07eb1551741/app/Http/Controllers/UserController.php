<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserValidation;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $abc=array();
        $i=0;
        $users=User::all();
        foreach($users as $user)
         {
             $perm=$user->getAllPermissions();
             $abc[$i]=array($user,$perm);
             $i++;
         }
       return $abc;
    }
    public function create(UserValidation $data){

        $user = User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
        ]);

        $user->assignRole($data->input('role'));
        return response()->json(['success'=>" User Added successfully."]);

    }

    public function show($id)
    {
        $user=User::find($id);
        $perm=$user->getAllPermissions();
        return array($user,$perm);
    }

    public function update(UserValidation $request,$id)
    {
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password = Hash::make($request['password']);
        $user->address=$request->input('address');
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role'));
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return 'Deleted Successfully';
    }
    public function assignR(Request $data, $id)
    {
        $user=User::find($id);
        $user->assignRole($data->input('role'));
        return "Role assigned Successfully";
    }
    public function assignP(Request $data,$id)
    {
        $user=User::find($id);
        $user->givePermissionTo($data->input('permissions'));
        return "Permissions assigned Successfully";
    }
    public function getPermission($id)
    {
        $user=User::find($id);
        $permission=$user->getALlPermissions();
        return $permission;
    }
}
