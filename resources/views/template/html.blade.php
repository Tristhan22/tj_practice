<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul class="links">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('profile')}}">Profile</a></li>
            <li><a href="{{route('events')}}">Events</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            @if (auth()->check())
            <li><a href="{{route('logout.user')}}">Logout</a></li>
            @else
            <li><a href="{{route('login')}}">Login</a></li>
            @endif
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
