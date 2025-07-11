<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function login(Request $request){
        
        $username = $request->username;
        $password = $request->password;
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $users = Admins::where('username', $username)
                            ->where('password',md5($password))->count();
       
        if ($users){
            $data = Admins::where('username', $username)
                            ->where('password',md5($password))->get();
            $id = $data[0]['id'];
            return response()->json(['result'=>true,'message'=>"Email or password is correct",'data'=> $id]);
        }else{
            return response()->json(['result'=>false,'message'=>"Email or password is incorrect"]);
        }

    }
}
