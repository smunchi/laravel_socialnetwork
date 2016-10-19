<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    
    public function getDashboard() {
        return view('dashboard');
    }
    
    public function postSignup(Request $request) {        
        $email = $request['email'];
        $password = bcrypt($request['password']);
        
        $user = new User();        
        $user->email = $email;
        $user->password = $password;
        $user->save();
        
        Auth::login($user);
        
        return redirect()->back();
    }
    
    public function postSignin(Request $request) {
       if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
           return redirect()->route('dashboard');
       }
       
       return redirect()->back();
    }
}