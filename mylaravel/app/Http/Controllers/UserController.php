<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
class UserController extends Controller
{
    function index(){
        $ีusers = User::all();
        $data['users'] = $ีusers;
        return view('user.index', ['users' => $ีusers]);
    }
    function login(Request $req){
        
    }
    function edit($id){
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.edit',$data);
    }

    function edit_action(Request $req){
        $muser = User::find($req->id);
        $muser->name = $req->name;
        $muser->email = $req->email;
        $muser->password = $req->password;
        $muser->save();
        return redirect('/user');
    }

    function delete(Request $req){
        $muser = User::find($req->id);
        $muser->delete();
        return Redirect('/user');
    }
}
