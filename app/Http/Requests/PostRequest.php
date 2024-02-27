<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
{
    return [
        'playlist_name' => 'required|string|max:100', // 'title' を 'playlist_name' に変更
        'body' => 'required|string|max:4000',
    ];
}

}