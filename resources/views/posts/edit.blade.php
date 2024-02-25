<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <style>
        .content__title, .content__body {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Edit</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>Playlist Name</h2>
                <!-- 'post[title]' を 'playlist_name' に修正 -->
                <input type='text' name='playlist_name' value="{{ old('playlist_name', $post->playlist_name) }}">
            </div>
            <div class='content__body'>
                <h2>Songs</h2>
                <!-- 'post[body]' を 'body' に修正 -->
                <textarea name='body'>{{ old('body', $post->body) }}</textarea>
            </div>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
