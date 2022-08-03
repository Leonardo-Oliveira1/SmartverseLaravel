<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function index(Request $request){

        //thumb_image
        $title = $request->input('post_title');
        //slug
        $metadescription = $request->input('post_metadescription');
        //author
        //author_id
        $category = $request->input('post_category');
        $text = $request->input('post_text');
        //post_link
        //created_at


        //Image Upload
        if($request->hasFile('post_banner') && $request->file('post_banner')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('posts_thumbs/'), $imageName);

        }

        return view('createPost', ['title' => $title, 'metadescription' => $metadescription, 'category' => $category, 'text' => $text]);
    }

    public function store(Request $request){

    }
}
