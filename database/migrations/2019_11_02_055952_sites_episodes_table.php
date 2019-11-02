<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SitesEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('image');
            $table->text('anime_image');
            $table->text('comment');
            $table->integer('group_id')->unsigned();
            $table->integer('episode_id')->unsigned();
            $table->integer('character_id')->unsigned();
            $table->timestamps();

            //外部キー
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('episode_id')->references('id')->on('episodes');
            $table->foreign('character_id')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
