<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td><img width="45px" height="45px" src="{{$post->image}}"></td>
            <td>
                <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <button type="button" class="btn btn-danger delete-post" data-id="{{ $post->id }}">Delete</button>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end p-3">
    <a class="btn btn-primary" href="{{ $posts->nextPageUrl() }}">Older Posts &rarr;</a>
</div>
</body>
</html>
