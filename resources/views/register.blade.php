@extends('master')

@section('change')
<center>
<link rel="stylesheet" href="style.css">
<div class="div1">
<h1> Register </h1>
@if($errors->any())
@foreach($errors->all() as $error)
<p style="color:red;">{{ $error}}</p>
@endforeach
@endif
<form action="{{ route('studentRegister') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Enter Name">
    <br><br>

    <input type="email" name="email" placeholder="Enter Email">
    <br><br>

    <input type="password" name="password" placeholder="Enter Password">
    <br><br>

    <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
    <br><br>

    <input type="submit" value="Register">
</form>
<h6 style="color:black"><a href="/login"><u>Existing user? click here or click home to Login</u></h6>
@if(Session::has('success'))
<p style="color:green;">{{Session::get('success')}}</p></center>
@endif
</div>
@endsection