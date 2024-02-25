<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // 標準リクエストクラス
use App\Http\Requests\PostRequest; // カスタムリクエストクラス
use App\Models\Post; // この行は1度だけ宣言
use Illuminate\Support\Facades\Auth; // 認証ファサード

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::getPaginateByLimit(); // 静的メソッドとして直接呼び出し
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); // IDを使用して投稿を検索
        $post->load('user'); // ユーザー情報を含めて投稿をロード
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $input = $request->validated();
        $post = new Post();
        $post->fill($input)->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $input = $request->validated();
        $post->fill($input)->save();

        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post) // メソッド名をLaravelの慣習に合わせて変更
    {
        $post->delete();
        return redirect('/posts');
    }
}
