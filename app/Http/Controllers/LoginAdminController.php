<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function admin(){
        return view('login.admin');
    }

    public function auth_admin(LoginAdminRequest $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
             $request->session()->regenerate();
             return redirect()->intended('/');
        }
        return back()->with('failed', 'username atau password salah!');
    }
}
