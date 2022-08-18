<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CTAsController extends Controller
{

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
