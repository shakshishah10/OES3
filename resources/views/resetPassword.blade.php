@extends('master')

@section('change')
<center>        
<link rel="stylesheet" href="style.css">     
<div class="div1" style="background-color:#E9D8E4">
<h1> Reset Password </h1>

@if($errors->any())
@foreach($errors->all() as $error)
<p style="color:red;">{{ $error}}</p>
@endforeach
@endif

<form action="{{ route('resetPassword') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user[0]['id'] ">
    <input type="password" name="password" placeholder="Enter Password">
    <br><br>
    <input type="password" name="password_confirmation" placeholder="Enter confirm Password">
    <br><br>
    <input type="submit" value="Reset Password">
</form>
@endsection
</div>
        </center>
        
</html>