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
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Post</h1>

            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" id="id" value="{{$post->id}}">
                <div class="form-group has-error">
                    <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                    <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                    @error('slug')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>

                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    @error('title')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>

                <div class="form-group">
                    <label for="description">Content</label>
                    <textarea rows="5" class="form-control" name="content">{{ $post->content }}</textarea>
                    @error('content')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>


                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </form>
        </div>

    </div>
</div>
</body>
</html>
