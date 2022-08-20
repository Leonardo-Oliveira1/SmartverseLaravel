<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\CTAsController;

class creatingPageController extends Controller
{
    public function index($category, $slug){

        $CTAs = new CTAsController();

        $postID = $this->getPost($slug);
        $userProfilePhoto = $this->getAuthorProfilePhoto($slug);


        $CTAsArray = array(
            "1" => $CTAs->getMostRead(1),
            "2" => $CTAs->getMostRead(2),
            "3" => $CTAs->getMostRead(3),
            "4" => $CTAs->getRecommended(1),
            "5" => $CTAs->getRecommended(2),
            "6" => $CTAs->getRecommended(3),
        );


        return view('postPage', [
            'post' => $postID,
            'authorPhoto' => $userProfilePhoto,
            'CTA' => $CTAsArray
        ]);
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
