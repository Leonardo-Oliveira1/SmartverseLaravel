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


        $user = session()->get('user');

        $user_id = $user[0][0];
        $user_name = $user[0][1];
        $user_profile_photo_path = $user[0][2];

        return view('dashboard.dashboard', ['posts' => $posts->getPostsInColumn(0, 6), 'users' => $users->getUserData(), 'user_id' => $user_id, 'user_name' => $user_name, 'user_profile_photo_path' => $user_profile_photo_path]);
    }
}
