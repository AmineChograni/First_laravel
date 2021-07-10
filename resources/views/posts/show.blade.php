@extends('layout')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <em>{{$post->created_at->diffForHumans()}}</em><br>
    
    <p>Status:
        @if($post->active)
            Enabled
        @else
            Disabled
        @endif
    </p>

@endsection