<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SavesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('saves')->insert([
            [
                'post_id' => 1, // 既存の投稿IDに置き換える
                'saved_at' => Carbon::now()->subDays(1), // 1日前に保存されたとする
                'unsaved_at' => null, // まだ解除されていない
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 他の保存レコードを追加
        ]);
    }
}
