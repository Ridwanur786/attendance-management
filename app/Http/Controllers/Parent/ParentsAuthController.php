<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentsAuthController extends Controller
{
    public function loginForm(){
        return view('Parent.auth.login');
    }
}
