<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Collection</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <h1>Collection</h1>
    <a href='/posts/create'>Create New Post</a>
    <div class='posts'>
        @foreach ($posts as $post)
            <article class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->playlist_name }}</a>
                </h2>
                <p class='body'>{{ $post->user->name }}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            </article>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <script>
    (function() {
        'use strict';
        window.deletePost = function(id) {
            if (confirm('Are you sure about deleting this post?')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    })();
    </script>
</body>
</html>
