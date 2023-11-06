<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    <div>
        @foreach ($posts as $post)
        <ul>
            <li><a href="/post/{{ $post->id }}">{{ $post->title }}</a></li>
        </ul>
        @endforeach
    </div>
</body>
</html>