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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Laravelが自動的に主キーとして設定
            $table->unsignedBigInteger('user_id'); // 外部キーとして使用
            $table->string('playlist_name');
            $table->timestamps(); // created_at と updated_at カラムを自動で作成
            $table->softDeletes(); // deleted_at カラムを追加
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
};
