<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_songs', function (Blueprint $table) {
            $table->id(); // ID
            $table->unsignedBigInteger('post_id'); // 投稿ID
            $table->unsignedBigInteger('song_id'); // 曲ID
            $table->timestamps(); // created_at と updated_at カラム
            
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_songs');
    }
};
