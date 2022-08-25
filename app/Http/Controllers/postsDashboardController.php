<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\homeController;

class postsDashboardController extends Controller
{
    public function index(){

        $posts = new homeController();

        $user = session()->get('user');

        $user_id = $user[0][0];
        $user_name = $user[0][1];
        $user_profile_photo_path = $user[0][2];

        return view('dashboard.postsActions', ['posts' => $posts->getPostsInColumn(), 'user_id' => $user_id, 'user_name' => $user_name, 'user_profile_photo_path' => $user_profile_photo_path]);
    }
}
