<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
<div class="container">
    <h1>All Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Categories</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    @foreach ($post->categories as $category)
                        <span class="badge badge-primary">{{ $category->name }}</span>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
