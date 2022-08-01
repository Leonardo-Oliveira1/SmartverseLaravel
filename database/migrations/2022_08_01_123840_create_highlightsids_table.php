<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighlightsidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highlightsids', function (Blueprint $table) {
            $table->id();
            $table->integer('mainHighlightRight');
            $table->integer('mainHighlightLeft');
            $table->integer('MostRead1');
            $table->integer('MostRead2');
            $table->integer('MostRead3');
            $table->integer('MostRead4');
            $table->integer('MostRead5');
            $table->integer('Recommended1');
            $table->integer('Recommended2');
            $table->integer('Recommended3');
            $table->integer('Recommended4');
            $table->integer('Recommended5');
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
        Schema::dropIfExists('highlightsids');
    }
}
