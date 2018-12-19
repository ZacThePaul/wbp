@extends('layouts.app')
@section('content')

    <h1>All posts</h1>

    @foreach($posts as $post)

        <a href="/posts/{{$post->slug}}"><h2>{{ $post->title }}</h2></a> by: {{$post->user->first }}<br>

    @endforeach

    {{$posts->links()}}

@endsection
