<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('notifications')->insert([
            [
                'user_id' => 1, // 既存のユーザーIDに置き換える
                'date' => Carbon::now(), // 現在の日時を設定
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 必要に応じてさらにレコードを追加
        ]);
    }
}
