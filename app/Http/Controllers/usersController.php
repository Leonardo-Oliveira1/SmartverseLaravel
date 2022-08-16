<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{

    public function getUserData(){
        $show = DB::table('users')->get();

        return $show;
    }
}
