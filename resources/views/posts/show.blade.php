<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <h1 class="playlist_name">
    {{ $post->playlist_name }}
</h1>
<p>User ID: {{ optional($post->user)->id }}</p>
<div class="content">
    <div class="content__post">
        <h3>Songs</h3>
        <p>{{ $post->body }}</p>   
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        </div>
        <div class="footer">
            <a href="/">Back</a>
        </div>
    </body>
</html>

