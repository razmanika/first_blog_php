@extends('layouts.Layout')
@section('content')
<div class="container">
    <h2>Create Post</h2>
    <form method="post" class="form-horizontal" action="{{route("posts.save")}}">
{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li color="red">{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        @endif--}}
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Author:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter author name" name="author">
{{--                @if($errors->first('author'))--}}
{{--                    <p class="danger">{{$errors->first('author')}}</p>--}}
{{--                @endif--}}
                @error('author')
                <li class="error" >{{$errors->first('author')}}</li>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control " id="title" placeholder="Enter text" name="title">
{{--                @if($errors->first('title'))--}}
{{--                    <p class="danger">{{$errors->first('title')}}</p>--}}
{{--                @endif--}}
                @error('title')
                <li class="error">{{$errors->first('title')}}</li>
                @enderror
            </div>
        </div>
        <div class="form-group">

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your text is here</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" colum name="body"></textarea>
{{--            @if($errors->first('body'))--}}
{{--                <p class="danger">{{$errors->first('body')}}</p>--}}
{{--            @endif--}}
            @error('body')
            <li class="error">{{$errors->first('body')}}</li>
            @enderror
        </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Likes:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="likes" placeholder="like" name="likes">
                </div>
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Post Me!</button>

            </div>
        </div>

        <h3 ><a href="/posts" color="cyan"><- Go back</a></h3>
    </form>



@endsection
