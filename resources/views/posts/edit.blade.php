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
    <h1 class="title">Edit</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>TITLE</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>SONGS</h2>
                <textarea name='post[body]'>{{ $post->body }}</textarea>
            </div>
            <input type="submit" value="SAVE">
        </form>
    </div>
</body>
</html>
