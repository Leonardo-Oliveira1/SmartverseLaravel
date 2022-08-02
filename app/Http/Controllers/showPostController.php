<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;

class showPostController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->orderByRaw('created_at DESC')->get();


        $GetMostRead1Id = DB::table('highlightsids')->select('MostRead1')->get();
        $MostRead1Id= json_decode(json_encode($GetMostRead1Id), true);
        $MostRead1 = DB::table('posts')->where('id', $MostRead1Id)->first();

        $GetMostRead2Id = DB::table('highlightsids')->select('MostRead2')->get();
        $MostRead2Id= json_decode(json_encode($GetMostRead2Id), true);
        $MostRead2 = DB::table('posts')->where('id', $MostRead2Id)->first();

        $GetMostRead3Id = DB::table('highlightsids')->select('MostRead3')->get();
        $MostRead3Id= json_decode(json_encode($GetMostRead3Id), true);
        $MostRead3 = DB::table('posts')->where('id', $MostRead3Id)->first();

        $GetMostRead4Id = DB::table('highlightsids')->select('MostRead4')->get();
        $MostRead4Id= json_decode(json_encode($GetMostRead4Id), true);
        $MostRead4 = DB::table('posts')->where('id', $MostRead4Id)->first();

        $GetMostRead5Id = DB::table('highlightsids')->select('MostRead5')->get();
        $MostRead5Id= json_decode(json_encode($GetMostRead5Id), true);
        $MostRead5 = DB::table('posts')->where('id', $MostRead5Id)->first();




        $GetRecommended1Id = DB::table('highlightsids')->select('Recommended1')->get();
        $Recommended1Id= json_decode(json_encode($GetRecommended1Id), true);
        $Recommended1 = DB::table('posts')->where('id', $Recommended1Id)->first();

        $GetRecommended2Id = DB::table('highlightsids')->select('Recommended2')->get();
        $Recommended2Id= json_decode(json_encode($GetRecommended2Id), true);
        $Recommended2 = DB::table('posts')->where('id', $Recommended2Id)->first();

        $GetRecommended3Id = DB::table('highlightsids')->select('Recommended3')->get();
        $Recommended3Id= json_decode(json_encode($GetRecommended3Id), true);
        $Recommended3 = DB::table('posts')->where('id', $Recommended3Id)->first();

        $GetRecommended4Id = DB::table('highlightsids')->select('Recommended4')->get();
        $Recommended4Id= json_decode(json_encode($GetRecommended4Id), true);
        $Recommended4 = DB::table('posts')->where('id', $Recommended4Id)->first();

        $GetRecommended5Id = DB::table('highlightsids')->select('Recommended5')->get();
        $Recommended5Id= json_decode(json_encode($GetRecommended5Id), true);
        $Recommended5 = DB::table('posts')->where('id', $Recommended5Id)->first();

        return view('home', [
            'posts' => $posts,
            'LeftHighlight' => $this->getLeftMainHighlight(),
            'RightHighlight' => $this->getRightMainHighlight(),
            'MostRead1' => $this->getMostRead(1),
            'MostRead2' => $MostRead2,
            'MostRead3' => $MostRead3,
            'MostRead4' => $MostRead4,
            'MostRead5' => $MostRead5,
            'Recommended1' => $Recommended1,
            'Recommended2' => $Recommended2,
            'Recommended3' => $Recommended3,
            'Recommended4' => $Recommended4,
            'Recommended5' => $Recommended5
        ]);
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
        $GetMostRead1Id = DB::table('highlightsids')->select('MostRead1')->get();
        $MostRead1Id= json_decode(json_encode($GetMostRead1Id), true);
        $MostRead{`$number`}  = DB::table('posts')->where('id', $MostRead1Id)->first();

        return $MostRead{`$number`};
    }
}
