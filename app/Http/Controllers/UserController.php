<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }

    public function store(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // return $data;
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }else{
            return "not login";
        }
    }


}
