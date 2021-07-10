@extends('layout')

@section('content')
    <h2> List of Posts</h2>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2><a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a></h2>
                <p>{{$post->content}}</p>
                <em>{{$post->created_at}}</em>
            </li>
        @endforeach
    </ul>
    
@endsection