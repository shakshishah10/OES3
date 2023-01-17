@extends('master')

@section('change')
<center>        
<link rel="stylesheet" href="style.css">     
<div class="div1" style="background-color:#E9D8E4">
<h1> Login </h1>

@if($errors->any())
@foreach($errors->all() as $error)
<p style="color:red;">{{ $error}}</p>
@endforeach
@endif

@if(Session::has('error'))
<p style="color:red;">{{ Session::get('error') }}</p>
@endif

<form action="{{ route('userLogin') }}" method="POST">
    @csrf
    
    <input type="email" name="email" placeholder="Enter Email">
    <br><br>

    <input type="password" name="password" placeholder="Enter Password">
    <br><br>

    <input type="submit" value="Login">
</form>
            <h6 style="color:black"><a href="/register"><u>new user? click here to register</u></h6>

            <a href="/forget-password">forget Password</a></div>
@endsection
</div>
        </center>
        
</html>