@extends('layouts.Layout')

@section('content')

    <a href="{{route('posts.create')}}"><script>alert('Information saved in your Database')</script></a>

    @endsection
