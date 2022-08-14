<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request){

        if(!auth()->user()){
            return view('auth.login');

        }else{
            $user = auth()->user();

            $request->session()->put('user', [
                ['user_id' => $user->id]
            ]);
        }

        return view('dashboard.dashboard', ['user' => $user]);
    }
}
