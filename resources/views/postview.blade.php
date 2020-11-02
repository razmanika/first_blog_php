@extends('layouts.Layout')
@section('content')

    <style>
        h5.postP{
            color: black;
            border-style: wave;
            border-color: #1a202c;
        }

        h3.h3{
            margin-top: 60px;
        }

        .back{
            color: cyan;
        }

        h1{
            color: cyan;
        }

    </style>

    <div class="viewpost">
        <h1>{{$post->title}}</h1>
        <h3 class="h3">Post Text</h3>

        <h5 class="postP">{{$post->body}}</h5>
    </div>

    <div class="back">
        <h2><a href="{{route('all.posts')}}"><-Go Back</a></h2>
    </div>
@endsection
