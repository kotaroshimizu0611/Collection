<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LikesTableSeeder extends Seeder
{
    public function run()
    {
        // 仮のユーザーIDと投稿IDを使用していることに注意してください
        // 実際には、既存のユーザーIDと投稿IDを使用する必要があります
        $userIds = [1]; // 既存のユーザーIDの例
        $postIds = [1]; // 既存の投稿IDの例

        foreach ($userIds as $userId) {
            foreach ($postIds as $postId) {
                DB::table('likes')->insert([
                    'user_id' => $userId,
                    'post_id' => $postId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}

