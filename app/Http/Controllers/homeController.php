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

        return view('home', [
            'posts' => $this->getPostsInColumn(),
            'LeftHighlight' => $this->getLeftMainHighlight(),
            'RightHighlight' => $this->getRightMainHighlight(),
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
