<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
    
    public function postSignup(Request $request) {
        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        
        $user = new User();        
        $user->email = $email;
        $user->password = $password;
        $user->save();
        
        return redirect()->back();
    }
}