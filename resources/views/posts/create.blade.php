<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>

    <!-- Show validation errors -->
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Post creation form -->
    <form action="/posts" method="POST">
        @csrf

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title') }}"><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content">{{ old('content') }}</textarea><br><br>

        <button type="submit">Save Post</button>
    </form>

    <br>
    <a href="/posts">Back to Posts</a>
</body>
</html>
