@extends('layout')

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{$post->title}}</h2>
                <p>{{$post->content}}</p>
                <em>{{$post->created_at}}</em>
            </li>
        @endforeach
    </ul>
    
@endsection