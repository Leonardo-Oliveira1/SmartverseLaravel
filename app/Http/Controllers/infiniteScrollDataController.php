<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infiniteScrollDataController extends Controller
{
    public function index(){
        if(isset($_GET['offset']) && isset($_GET['limit'])){
            $limit = $_GET['limit'];
            $offset = $_GET['offset'];

            echo "<script>console.log('limit: $limit, offset: $offset')</script>";

            //$posts->show("all", $limit, $offset);

        }
    }
}
