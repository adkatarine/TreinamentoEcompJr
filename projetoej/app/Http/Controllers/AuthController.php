<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class AuthController extends Controller
{

    public function formLogin(){
        return view('admin.form-login');
    }

    public function login(Request $request){
        var_dump($request->all());
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('/');
        }
        return redirect()->back()->withInput()->withErrors(['Os dados estão incorretos. Tente novamente!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }
    
}
