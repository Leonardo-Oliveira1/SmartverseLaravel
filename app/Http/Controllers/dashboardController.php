<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\usersController;

class dashboardController extends Controller
{
    public function index(Request $request){

        $posts = new homeController();
        $users = new usersController();

        if(auth()->user() == null){
            return view('auth.login');
        }else{
            $user = auth()->user();

            $request->session()->put('user', [
                [$user->id, $user->name, $user->profile_photo_path]
            ]);
        }

        return view('dashboard.dashboard', ['user' => $user, 'posts' => $posts->getPostsInColumn(), 'users' => $users->getUserData()]);
    }
}
