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

            <h1>Create Post</h1>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group has-error">
                    <label for="slug">Slug <span class="require">*</span></label>
                    <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                    @error('slug')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>

                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    @error('title')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>

                <div class="form-group">
                    <label for="description">Content</label>
                    <textarea rows="5" class="form-control" name="content" >{{old('content')}}</textarea>
                    @error('content')<div class="alert alert-danger"> {{$message}} </div>@enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    @error('email')<div class="alert alert-danger"> {{$message}} </div>@enderror


                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone" value="{{old('phone')}}">
                        @error('phone')<div class="alert alert-danger"> {{$message}} </div>@enderror
                    </div>

                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name='image'>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

            </form>
        </div>

    </div>
</div>
</body>
</html>
