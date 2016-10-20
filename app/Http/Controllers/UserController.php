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

        $this->validate($request, [
            'name'=>'required|min:2|max:30',
            'email'=>'required|email|unique:users',
            'password'=>'min:4'
            
        ]);
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
       $this->validate($request, [
           'email'=>'required',
           'password'=>'required'
       ]); 
       
       if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
           return redirect()->route('dashboard');
       }
       
       return redirect()->back();
    }
}