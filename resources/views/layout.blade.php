<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session()->has('status'))
        <h3 style="color: green">
            {{session()->get('status')}}
        </h3>
    @endif

    <ul>
        <li><a href="{{route('Home')}}">Home</a></li>
        <li><a href="{{route('About')}}">About</a></li>
        <li><a href="{{route('posts.create')}}">New post</a></li>
    </ul>
    @yield('content')
</body>
</html>