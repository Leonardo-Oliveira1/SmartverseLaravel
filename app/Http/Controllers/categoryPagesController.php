<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CTAsController;

class categoryPagesController extends Controller
{
    public function index($category){

        $posts = new homeController();
        $CTAs = new CTAsController();

        $CTAsArray = array(
            "1" => $CTAs->getMostRead(1),
            "2" => $CTAs->getMostRead(2),
            "3" => $CTAs->getMostRead(3),
            "4" => $CTAs->getMostRead(4),
            "5" => $CTAs->getMostRead(5),
            "6" => $CTAs->getRecommended(1),
            "7" => $CTAs->getRecommended(2),
            "8" => $CTAs->getRecommended(3),
            "9" => $CTAs->getRecommended(4),
            "10" => $CTAs->getRecommended(5)
        );

        return view('categories/'.$category, [
            'posts' => $this->ShowPostByCategory($category),
            'CTA' => $CTAsArray,
            'MostRead1' => $CTAs->getMostRead(1),
            'MostRead2' => $CTAs->getMostRead(2),
            'MostRead3' => $CTAs->getMostRead(3),
            'MostRead4' => $CTAs->getMostRead(4),
            'MostRead5' => $CTAs->getMostRead(5),
            'Recommended1' => $CTAs->getRecommended(1),
            'Recommended2' => $CTAs->getRecommended(2),
            'Recommended3' => $CTAs->getRecommended(3),
            'Recommended4' => $CTAs->getRecommended(4),
            'Recommended5' => $CTAs->getRecommended(5)
        ]);
    }

    public function ShowPostByCategory($category){
        $posts = DB::table('posts')->where('category', $category)->orderByRaw('created_at DESC')->get();

        return $posts;
    }
}
