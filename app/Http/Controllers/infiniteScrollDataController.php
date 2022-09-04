<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\homeController;

class infiniteScrollDataController extends Controller
{
    public function index(){

        $postsHome = new homeController();

        if(isset($_GET['offset'])){
            $offset = $_GET['offset'];

            echo "<script>console.log('offset: $offset')</script>";

            $posts = $postsHome->getPostsInColumn($offset, 6);

            foreach ($posts as $post) {
                $date = date('d/m/Y', strtotime($post->created_at));
                $img = asset('storage/posts_banners/' . $post->thumb_image);

                echo "<a href='/post/{{ $post->category }}/{{ $post->slug }}'>
                <div class='post'>

                    <div id='postImage'>
                        <img src='$img' alt='$post->title'>
                    </div>

                    <div class='postContent'>
                        <h2>$post->title</h2>
                        <p>Por $post->author</p>

                        <div class='CategoryAndLikes'>
                            <p>Em $post->category • $date</p>
                        </div>
                    </div>

                </div>
            </a>
            <hr>";
            }
        }
    }
}
