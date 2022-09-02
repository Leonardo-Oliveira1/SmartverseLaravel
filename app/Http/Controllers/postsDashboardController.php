<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class postsDashboardController extends Controller
{
    public function index(Request $request){

        $posts = new homeController();

        $user = session()->get('user');

        $user_id = $user[0][0];
        $user_name = $user[0][1];
        $user_profile_photo_path = $user[0][2];

        $this->getURL();

        $query = request('q');
        $postsFiltered = DB::table('posts')->where('title', 'LIKE', '%'.$query.'%')->orderByRaw('created_at DESC')->get();

        if(isset($query)){
            return view('dashboard.postsActions', ['posts' => $postsFiltered, 'query' => $query, 'user_id' => $user_id, 'user_name' => $user_name, 'user_profile_photo_path' => $user_profile_photo_path]);
        } else {
            return view('dashboard.postsActions', ['posts' => $posts->getPostsInColumn(), 'query' => $user_id, 'user_name' => $user_name, 'user_profile_photo_path' => $user_profile_photo_path]);
        }

    }

    public function getURL(){
        $action = request("action");
        $number = request("number");
        $id = request("id");

        if($action == "setMostRead"){
            $this->setHighlight($number, $id, "MostRead");
        }

        if($action == "setRecommended"){
            $this->setHighlight($number, $id, "Recommended");
        }

        if($action == "LeftHighlight"){
            $this->setMainHighlight($id, "mainHighlightLeft");
        }

        if($action == "RightHighlight"){
            $this->setMainHighlight($id, "mainHighlightRight");
        }

        if($action == "delete"){
            $this->delete($id);
        }
    }

    public function setHighlight($number, $id, $action){
        DB::table('highlightsids')->where($action.$number, 1)->update([
            $action.$number => $id,
        ]);
    }

    public function setMainHighlight($id, $action){
        DB::table('highlightsids')->where('highlightsids.'.'id', 1)->update([
            $action => $id,
        ]);
    }

    public function delete($id){
        $post = DB::table('posts')->where('id', $id)->first();
        Storage::delete('public/posts_banners/'.$post->thumb_image);

        DB::table('posts')->where('id', $id)->delete();

    }

}
