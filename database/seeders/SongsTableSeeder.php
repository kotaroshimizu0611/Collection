<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('songs')->insert([
            [
                'name' => 'Song Name 1',
                'artist' => 'Artist Name 1',
                'order' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Song Name 2',
                'artist' => 'Artist Name 2',
                'order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 必要に応じてさらにレコードを追加
        ]);
    }
}
