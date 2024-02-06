<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Seederクラスのuse宣言が必要です
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Example User',
            'email' => 'user'.rand(1, 1000).'@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // セキュアなパスワードにする
            'remember_token' => Str::random(10), // 正しいカラム名に修正
            'image_url' => null, // 任意で
            'bio' => 'This is an example user.', // 任意で
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

