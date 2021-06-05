<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100">
<nav class="p-6 bg-gray-700 text-white flex justify-between mb-6">
    <ul class="flex items-center">
        <a href="">
            <li class="p-3">Home</li>
        </a>
        <a href="">
            <li class="p-3">Dashboard</li>
        </a>
        <a href="">
            <li class="p-3">Post</li>
        </a>
    </ul>
    <ul class="flex items-center">
        @auth()
        <a href="">
            <li class="p-3"> {{auth()->user()->name}} </li>
        </a>
        <a href="">
            <li class="p-3">
                <form action="{{route('logout')}}" method="post">@csrf<button type="submit">Logout</button></form></li>
        </a>
        @endauth
        @guest()
        <a href="{{route('login')}}">
            <li class="p-3">Login</li>
        </a>
        <a href="{{route('register')}}">
            <li class="p-3">Register</li>
        </a>
            @endguest

    </ul>

</nav>
@yield('content')
</body>
</html>
