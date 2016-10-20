<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate{
    
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {        
        
        if(Auth::guard($guard)->guest()) {
           if($request->ajax()) {
               return response('Unauthorized', 401);
           } else {
               return redirect()->route('home');
           }
       }
       
       return $next($request);
    }
}