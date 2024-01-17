<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){

        return view('backend.pages.login');
        
     }
     public function do_login(Request $request){
        // dd($request->all());
        $credentials=$request->except('_token');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            return to_route('dashboard');
        }
        else{
            return to_route('login');

        }
        
     }

     public function logout(){
    
      Auth::logout();

      return redirect()->route('login')->with('msg','Logout Success');

     }
}
