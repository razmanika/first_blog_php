@extends('layouts.Layout')
@section('content')
<div class="container">
    <h2>Horizontal form</h2>
    <form method="post" class="form-horizontal" action="{{route("posts.save")}}">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Author:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter author name" name="author">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Title:</label>
            <div class="col-sm-10">
                <input type="title" class="form-control" id="title" placeholder="Enter text" name="title">
            </div>
        </div>
        <div class="form-group">

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your text is here</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body"></textarea>
        </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Like:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="likes" placeholder="like" name="likes">
                </div>
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Post</button>
                <script>
                    $("form").submit(function(){
                        alert("Your Post Has Been Added in Database");
                    });
                </script>

            </div>
        </div>
    </form>



@endsection
