<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('admin.users.all-user',[
            'users' => User::all(),
        ]);
    }
    public function role($id){
        $user = User::find($id);
        if ($user->role_as==1){
            $user->role_as=0;
            $user->save();
            return redirect()->back()->with('message','Your Role User Update Successfully!');
        }
        else{
            $user->role_as=1;
            $user->save();
            return redirect()->back()->with('message','Your Role Admin Update Successfully!');
        }
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message','User Delete Successfully');
    }
}
