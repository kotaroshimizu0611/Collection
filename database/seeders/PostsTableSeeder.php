<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // 修正された名前空間

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1, // 実際の使用では既存のユーザーIDに置き換える
                'playlist_name' => 'My Favorite Songs',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1, // 実際の使用では既存のユーザーIDに置き換える
                'playlist_name' => 'Chill Vibes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 必要に応じてさらにレコードを追加
        ]);
    }
}

