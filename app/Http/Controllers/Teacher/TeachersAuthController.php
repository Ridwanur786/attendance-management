<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeachersAuthController extends Controller
{

    public function loginForm(){
         return view('Teacher.auth.login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password'=>'required'
        ]);

        if(Auth::guard('teacher')->attempt($credentials)){
            return redirect()->route('teacher.home');
        }


        return redirect()->back()->withErrors(['email' => 'credentials not matched']);
    }

    public function home(){
        return view('Teacher.home.home');
    }


    public function logout(Request $request){
        Auth::guard('teacher')->logout();
        
            $request->session()->invalidate();

             $request->session()->regenerateToken();
        return redirect()->route('teacher.login');
    }
   
}
