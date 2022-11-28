<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(20);
        return view('admin.user.index',compact('users')); 
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('user.index');
    }


    public function delete($id){
        $user = User::find($id);
        $user->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('user.index');
    }
}
