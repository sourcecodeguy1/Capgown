@extends('layout/app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="jumbotron">
                <h3>{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
            @endforeach
        @else
        <p>No posts found!</p>
    @endif
@endsection