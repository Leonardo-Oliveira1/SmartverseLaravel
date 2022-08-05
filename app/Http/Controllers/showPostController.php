<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;

class showPostController extends Controller
{
    public function index(){

        return view('home', [
            'posts' => $this->getPostsInColumn(),
            'LeftHighlight' => $this->getLeftMainHighlight(),
            'RightHighlight' => $this->getRightMainHighlight(),
            'MostRead1' => $this->getMostRead(1),
            'MostRead2' => $this->getMostRead(2),
            'MostRead3' => $this->getMostRead(3),
            'MostRead4' => $this->getMostRead(4),
            'MostRead5' => $this->getMostRead(5),
            'Recommended1' => $this->getRecommended(1),
            'Recommended2' => $this->getRecommended(2),
            'Recommended3' => $this->getRecommended(3),
            'Recommended4' => $this->getRecommended(4),
            'Recommended5' => $this->getRecommended(5)
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

    public function getMostRead($number){

        $MostNumber = "MostRead$number";

        $GetMostReadId{`$number`} = DB::table('highlightsids')->select($MostNumber)->get();
        $MostReadId{`$number`} = json_decode(json_encode($GetMostReadId{`$number`}), true);
        $MostRead{`$number`}  = DB::table('posts')->where('id', $MostReadId{`$number`})->first();

        return $MostRead{`$number`};
    }

    public function getRecommended($number){

        $RecommendedNumber = "Recommended$number";

        $GetRecommendedId{`$number`} = DB::table('highlightsids')->select($RecommendedNumber)->get();
        $RecommendedId{`$number`} = json_decode(json_encode($GetRecommendedId{`$number`}), true);
        $Recommended{`$number`} = DB::table('posts')->where('id', $RecommendedId{`$number`})->first();

        return $Recommended{`$number`};

    }
}
