@extends('template.html');

@section('title')
   Login
   @endsection

   @section('content')
   <h1>Welcome to login page</h1>
   <form action="{{route('login.submit')}}" method="post">
    @csrf
    <div>
        <input type="text" name="username" placeholder="Username">
    </div>
    <div>
    <input type="text" name="password" placeholder="Password">
    </div>
    <button>Login</button>
    <div>
        @error ('message')
        <span style="color:red">{{'$message'}}</span>
        @enderror
    </div>
   </form>
   @endsection