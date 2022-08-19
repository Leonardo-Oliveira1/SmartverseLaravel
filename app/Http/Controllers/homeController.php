<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\CTAsController;

class homeController extends Controller
{
    public function index(){

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

        return view('home', [
            'posts' => $this->getPostsInColumn(),
            'LeftHighlight' => $this->getLeftMainHighlight(),
            'RightHighlight' => $this->getRightMainHighlight(),
            'CTA' => $CTAsArray
        ]);
    }

    public function getPostsInColumn(){
        $show = DB::table('posts')->orderByRaw('created_at DESC')->get();

        return $show;
    }

    public function getLeftMainHighlight(){
        $GetLeftHighlightId = DB::table('highlightsids')->select('mainHighlightLeft')->get();
        $LeftHighlightId= json_decode(json_encode($GetLeftHighlightId), true);
        $LeftHighlight = DB::table('posts')->where('id', $LeftHighlightId)->first();

        return $LeftHighlight;
    }

    public function getRightMainHighlight(){
        $GetRightHighlightId = DB::table('highlightsids')->select('mainHighlightRight')->get();
        $RightHighlightId= json_decode(json_encode($GetRightHighlightId), true);
        $RightHighlight = DB::table('posts')->where('id', $RightHighlightId)->first();

        return $RightHighlight;
    }
}
