@extends('layouts.Layout')
@section('content')
    <div class="container">
        <h2>Edit your post</h2>
        <form method="post" class="form-horizontal" action="{{route("post.update", $post->id)}}">
            @csrf
{{--            PUT გამოიყენება აბდეითისთვის--}}
            @method('PUT')
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Title:</label>
                <div class="col-sm-10">
                    <input type="title" class="form-control" id="title" placeholder="Enter text" name="title" value="{{old('title', $post->title)}}">
                    @error('title')
                    <li class="error">{{$errors->first('title')}}</li>
                    @enderror
                </div>
            </div>
            <div class="form-group">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your text is here</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body">{{old('body',$post->body)}}</textarea>
                    @error('title')
                    <li class="error">{{$errors->first('title')}}</li>
                    @enderror
                </div>


            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Update</button>
                    <script>
                        $("form").submit(function(){
                            alert("Your post has been updated");
                        });
                    </script>

                </div>
                <h3 ><a href="/posts" color="cyan"><- Go back</a></h3>
            </div>
        </form>



@endsection
