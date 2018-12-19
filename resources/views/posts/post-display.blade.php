@extends('layouts.app')
@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <i class="far fa-eye"></i>{{ $post->views }}<br>

    {{--<button class="btn btn-primary">Edit</button>--}}
    {{--<button class="btn btn-danger">Delete</button>--}}



@endsection