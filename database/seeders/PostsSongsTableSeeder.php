<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsSongsTableSeeder extends Seeder
{
    public function run()
    {
        $postSongPairs = [
            ['post_id' => 1, 'song_id' => 1],
            // 他の投稿IDと曲IDのペアを追加
        ];

        foreach ($postSongPairs as $pair) {
            DB::table('posts_songs')->insert([
                'post_id' => $pair['post_id'],
                'song_id' => $pair['song_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
