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
        Schema::create('saves', function (Blueprint $table) {
            $table->id(); // 保存レコードのID
            $table->unsignedBigInteger('post_id'); // 保存された投稿のID
            $table->timestamp('saved_at')->nullable(); // 投稿が保存された時刻
            $table->timestamp('unsaved_at')->nullable(); // 保存が解除された時刻
            $table->timestamps(); // created_at と updated_at カラム
            
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
        Schema::dropIfExists('saves');
    }
};
