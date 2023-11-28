<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function Loginindex(){
        return view ('login');
    }

    public function SignUp(){
        return view('signup');
    }
    public function __invoke(Request $request){
        return view('success');
    }
}
