<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Federation;
use Redirect;

class AuthController extends Controller
{

    public function formLogin(){
        $federacoes = Federation::all();
        return view('admin.form-login', ['federacoes' => $federacoes]);
    }

    public function login(Request $request){
        var_dump($request->all());
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $federacoes = Federation::all();
        if(Auth::attempt($credentials)){
            return redirect()->route('/home', ['federacoes' => $federacoes]);
        }
        return redirect()->back()->withInput()->withErrors(['Os dados estão incorretos. Tente novamente!']);
    }

    public function logout(){
        Auth::logout();
        $federacoes = Federation::all();
        return redirect()->route('/home', ['federacoes' => $federacoes]);
    }
    
}
