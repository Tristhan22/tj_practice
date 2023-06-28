@extends('template.html');

@section('title')
    Register
@endsection

@section('content')
<h1>Welcome to register page</h1>
<form action="" method="post" style="text-align:center;">
    @csrf
    <label for="name">
        @error('name')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" name="name" placeholder="Name">
    <label for="username">
        @error('username')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" name="username" placeholder="Username">
    <label for="password">
        @error('password')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="password" name="password" placeholder="Password">
    <button>Register</button>
</form>
@endsection