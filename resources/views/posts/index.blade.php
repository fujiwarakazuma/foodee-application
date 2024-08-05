<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>foodee</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
    </body>
</html>