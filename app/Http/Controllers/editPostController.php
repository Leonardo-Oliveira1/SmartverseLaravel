<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class editPostController extends Controller
{

    public function index($id){

        $post = DB::table('posts')->where('id', $id)->first();

        return view('dashboard.editingPost', ['post' => $post]);
    }

    public function update(Request $request, $id){

        $title = $request->input('post_title');
        $metadescription = $request->input('post_metadescription');
        $category = $request->input('post_category');
        $text = $request->input('post_text');

        DB::table('posts')->where('id', $id)->update([
            'title' => $title,
            'metadescription' => $metadescription,
            'category' => $category,
            'text' => $text
        ]);

        return redirect('dashboard/posts');
    }
}
