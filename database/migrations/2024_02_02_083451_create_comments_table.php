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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // コメントID
            $table->unsignedBigInteger('user_id'); // ユーザーID
            $table->unsignedBigInteger('post_id'); // 投稿ID
            $table->text('comment'); // コメント内容
            $table->softDeletes(); // 論理削除のdeleted_at
            $table->timestamps(); // created_at と updated_at
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
