<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\postsController;
use App\Http\Controllers\usersController;

class dashboardController extends Controller
{
    public function index(Request $request){

        $posts = new postsController();
        $users = new usersController();

        if(auth()->user() == null){
            return view('auth.login');
        }else{
            $user = auth()->user();

            $request->session()->put('user', [
                ['user_id' => $user->id]
            ]);
        }

        return view('dashboard.dashboard', ['user' => $user, 'posts' => $posts->getPostsInColumn(), 'users' => $users->getUserData()]);
    }
}
