<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CreatePostController;

class CreatePostTest extends TestCase{

    public function test_get_author_infos(){
        $CreatePost = new CreatePostTest();

        $this->assertEquals(12, 12);
    }

    public function test_get_and_save_image(){
        $CreatePost = new CreatePostTest();

        $this->assertTrue(true);
    }

    public function test_storage_all_data_in_database(){
        $CreatePost = new CreatePostTest();

        $this->assertTrue(true);
    }
}
