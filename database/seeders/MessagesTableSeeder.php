<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->insert([
            [
                'user_id' => 1, // 既存のユーザーIDに置き換える
                'sent_at' => Carbon::now()->subMinutes(10), // 10分前に送信されたとする
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // 他のメッセージレコードを追加
        ]);
    }
}

