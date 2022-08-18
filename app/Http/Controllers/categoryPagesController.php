<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\homeController;

class categoryPagesController extends Controller
{
    public function index(Request $request){

        $posts = new homeController();

        return view('categories/'.$request->segments()[0], [
            'posts' => $this->ShowPostByCategory($request),
            'MostRead1' => $posts->getMostRead(1),
            'MostRead2' => $posts->getMostRead(2),
            'MostRead3' => $posts->getMostRead(3),
            'MostRead4' => $posts->getMostRead(4),
            'MostRead5' => $posts->getMostRead(5),
            'Recommended1' => $posts->getRecommended(1),
            'Recommended2' => $posts->getRecommended(2),
            'Recommended3' => $posts->getRecommended(3),
            'Recommended4' => $posts->getRecommended(4),
            'Recommended5' => $posts->getRecommended(5)
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
