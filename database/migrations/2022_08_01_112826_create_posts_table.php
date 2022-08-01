<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('thumb_image', 50);
            $table->string('title', 100);
            $table->string('slug');
            $table->string('metadescription', 168);
            $table->string('author', 20);
            $table->string('author_id', 4);
            $table->string('category', 20);
            $table->text('text');
            $table->string('post_link', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
