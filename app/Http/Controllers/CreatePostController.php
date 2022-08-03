<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreatePostController extends Controller
{
    public function index(Request $request){

        return view('createPost', ['data' => $this->getData($request)]);
    }



    public function getData(Request $request){
        //thumb_image
        $title = $request->input('post_title');
        $slug = Str::slug($title);
        $metadescription = $request->input('post_metadescription');
        //author
        //author_id
        $category = $request->input('post_category');
        $text = $request->input('post_text');
        //created_at

        $data = array($title, $metadescription, $category, $text, $slug);

        return $data;

    }

    public function getAuthorInfos(){

    }

    public function getAndSaveImage(){
        //Image Upload
        if($request->hasFile('post_banner') && $request->file('post_banner')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('posts_thumbs/'), $imageName);

        }
    }

    public function store(Request $request){
        return view('createPost');
    }

}
