<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function index(){
        return view('dashboard.login');
    }

    public function auth(Request $request){

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            dd("funfou");
        }else{
            dd("erro");
        }
    }
}
