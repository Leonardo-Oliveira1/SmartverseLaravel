<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function index(){
        $query = request('q');
        $posts = DB::table('posts')->where('title', 'LIKE', '%'.$query.'%')->orderByRaw('created_at DESC')->get();

        return view('search', ['query' => $query, 'posts' => $posts]);
    }
}
