<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    {{-- Example list --}}
    <ul>
        <li><a href="{{ url('/posts/1') }}">First Post</a></li>
        <li><a href="{{ url('/posts/2') }}">Second Post</a></li>
    </ul>
</body>
</html>
