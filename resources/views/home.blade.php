@extends('layouts.app')
@section('content')

    <h1>Most recent posts</h1>

    @foreach($posts as $post)

        <a href="/posts/{{$post->slug}}"><h2>{{ $post->title }}</h2></a> by: {{$post->user->first }}<br>

    @endforeach

    <a href="{{ route('posts') }}">View all posts</a>

@endsection
