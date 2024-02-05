<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        // 仮のユーザーIDと投稿IDを使用していることに注意してください
        // 実際には、既存のユーザーIDと投稿IDを使用する必要があります
        DB::table('comments')->insert([
            [
                'user_id' => 1, // 実際の使用では既存のユーザーIDに置き換える
                'post_id' => 1, // 実際の使用では既存の投稿IDに置き換える
                'comment' => 'This is a great post!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 必要に応じてさらにレコードを追加
        ]);
    }
}
