@extends('layout')

@section('content')

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div>
            <label for="title">Your Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="content">Your Content</label>
            <input type="text" name="content" id="content">
        </div>

        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            
        </ul>
        @endif

        <button type="submit">Add post</button>
    </form>
    
@endsection