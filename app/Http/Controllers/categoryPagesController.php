<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\showPostController;

class categoryPagesController extends Controller
{
    public function index(Request $request){

        $showPosts = new showPostController();

        return view($request->segments()[0], [
            'posts' => $this->ShowPostByCategory($request),
            'MostRead1' => $showPosts->getMostRead(1),
            'MostRead2' => $showPosts->getMostRead(2),
            'MostRead3' => $showPosts->getMostRead(3),
            'MostRead4' => $showPosts->getMostRead(4),
            'MostRead5' => $showPosts->getMostRead(5),
            'Recommended1' => $showPosts->getRecommended(1),
            'Recommended2' => $showPosts->getRecommended(2),
            'Recommended3' => $showPosts->getRecommended(3),
            'Recommended4' => $showPosts->getRecommended(4),
            'Recommended5' => $showPosts->getRecommended(5)
        ]);
    }

    public function ShowPostByCategory($request){

        if($request->segments()[0] == 'livros') {
            $category = "Livros";
        }elseif ($request->segments()[0] == 'cinema'){
            $category = "Cinema";
        }elseif ($request->segments()[0] == 'destaques'){
            $category = "destaques";
        }else{
            return view('home');
        }

        $posts = DB::table('posts')->where('category', $category)->orderByRaw('created_at DESC')->get();

        return $posts;
    }
}
