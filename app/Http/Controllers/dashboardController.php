<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){

        $user = auth()->user();

        if(!auth()->user()){
            return view('auth.login');
        }

        return view('dashboard.dashboard', ['user' => $user]);
    }
}
