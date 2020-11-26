<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('user.login');

    }

    public function login(Request $request){
        $request->validate([
           'name'=>'required',
            'password' =>'required'
        ]);

        $credentials = $request->except(['_token']);


//        $user = User::where('name', $request->name)->first();

        if(Auth::attempt($credentials)){


            return redirect('/');
//            dd('ss');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }
}
