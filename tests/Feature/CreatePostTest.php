<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Controllers\CreatePostController;

class CreatePostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_author_name(){
        $CreatePost = new CreatePostController();

        $this->assertIsString($CreatePost->getAuthorName());

    }

    public function test_get_author_id(){
        $CreatePost = new CreatePostController();

        $this->assertStringMatchesFormat('%i', $CreatePost->getAuthorId());
    }

    public function test_storage_all_data_in_database(){
        $CreatePost = new CreatePostController();

        $this->assertNotEmpty($CreatePost->store());
    }
}
