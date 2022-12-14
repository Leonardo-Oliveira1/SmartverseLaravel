<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class registeringPost extends Controller
{
    public function index(Request $request){
        return view('registeringPost', ['data' => $this->getData($request)]);
    }

    public function getData(Request $request){

        $user = session()->get('user');
        $user_id = $user[0][0];

        $thumb_image = $this->getAndSaveImage($request);
        $title = $request->input('post_title');
        $slug = Str::slug($title);
        $metadescription = $request->input('post_metadescription');
        $author = $this->getAuthorName($user_id);
        $author_id = $this->getAuthorId($user_id);
        $category = $request->input('post_category');
        $text = $request->input('post_text');

        $data = array($title, $metadescription, $category, $text, $slug, $author_id, $author, $thumb_image);

        return $data;

    }

    public function getAuthorName($id){
        $AuthorName = DB::table('users')->where('id', $id)->value('name');

        return $AuthorName;

    }

    public function getAuthorId($id){
        $AuthorID = DB::table('users')->where('id', $id)->value('id');

        return $AuthorID;

    }

    public function getAndSaveImage(Request $request){
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

        $data = $this->getData($request);

        DB::table('posts')->insert([
            'thumb_image' => $data[7],
            'title' => $data[0],
            'slug' => $data[4],
            'metadescription' => $data[1],
            'author' => $data[6],
            'author_id' => $data[5],
            'category' => $data[2],
            'text' => $data[3],
        ]);

        return redirect('post/'.$data[2].'/'.$data[4]);

    }
}
