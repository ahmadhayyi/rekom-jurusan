<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginSiswaRequest;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginSiswaController extends Controller
{
    public function siswa(){
        return view('login.siswa');
    }

    public function auth_siswa(LoginSiswaRequest $request){
        $user = User::where('nisn', $request->nisn)->first();
        if(!empty($user)){
            Auth::loginUsingId($user->id);
            $request->session()->regenerate();
            return redirect()->intended('/jawab');
        }else{
            $tambah = User::create($request->all());
            $mapel = Mapel::select('id')->get();
            foreach ($mapel as $item) {
                Nilai::create([
                    'user_id' => $tambah->id,
                    'mapel_id' => $item->id,
                    'nilai' => null,
                ]);
            }
            Auth::loginUsingId($tambah->id);
            $request->session()->regenerate();
            return redirect()->intended('/jawab');
        }
    }
}
