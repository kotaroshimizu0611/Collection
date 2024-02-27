<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <h1>Create post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="playlist_name">
                <h2>Playlist name</h2>
                <!-- "name" 属性の修正 -->
                <input type="text" name="playlist_name" placeholder="playlist_name" value="{{ old('playlist_name') }}"/>
                <!-- エラーメッセージの表示を修正 -->
                <p class="playlist_name__error" style="color:red">{{ $errors->first('playlist_name') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <!-- "name" 属性の修正 -->
                <textarea name="body" placeholder="Yesterday the beatles">{{ old('body') }}</textarea>
                <!-- エラーメッセージの表示を修正 -->
                <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
            </div>
            <button type="submit">Save</button>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
