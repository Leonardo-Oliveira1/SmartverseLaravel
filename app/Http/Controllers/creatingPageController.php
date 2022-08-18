<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class creatingPageController extends Controller
{
    public function index(Request $request){
        $category = $request->segments()[1];
        $slug = $request->segments()[2];

        $postID = $this->getPost($slug);
        $userProfilePhoto = $this->getAuthorProfilePhoto($slug);

        return view('postPage', ['post' => $postID, 'authorPhoto' => $userProfilePhoto]);
    }

    public function getPost($slug){
        $postID = DB::table('posts')->where('slug', $slug)->first();

        return $postID;
    }

    public function getAuthorProfilePhoto($slug){
        $postID = $this->getPost($slug);

        $userProfilePhoto = DB::table('users')->where('id', $postID->author_id)->first();

        return $userProfilePhoto->profile_photo_path;
    }
}
