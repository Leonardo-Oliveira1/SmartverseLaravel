<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreatePostController extends Controller
{
    public function index(Request $request){

        return view('createPost', ['data' => $this->getData($request)]);
    }



    public function getData(Request $request){
        $thumb_image = $this->getAndSaveImage($request);
        $title = $request->input('post_title');
        $slug = Str::slug($title);
        $metadescription = $request->input('post_metadescription');
        $author = $this->getAuthorName();
        $author_id = $this->getAuthorId();
        $category = $request->input('post_category');
        $text = $request->input('post_text');
        //created_at

        $data = array($title, $metadescription, $category, $text, $slug, $author_id, $author, $thumb_image);

        return $data;

    }

    public function getAuthorName(){
        $AuthorID = DB::table('users')->where('id', 1)->value('name');

        return $AuthorID;

    }

    public function getAuthorId(){
        $AuthorID = DB::table('users')->where('id', 1)->value('id');

        return $AuthorID;

    }

    public function getAndSaveImage(Request $request){
        //Image Upload
        if($request->hasFile('post_banner')){
            $filenameWithExt = $request->file('post_banner')->getClientOriginalName();

            $filename = pathinfo(md5($filenameWithExt), PATHINFO_FILENAME);
            $extension = $request->file('post_banner')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('post_banner')->storeAs('public/posts_banners', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.png';
        }

        return $fileNameToStore;
    }

    public function store(Request $request){
        return view('createPost');
    }

}
