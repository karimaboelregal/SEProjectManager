@extends('layouts.app')

@section('content')
<style>
body {
  background-image: linear-gradient(rgba(0, 0, 0, 0.627),rgba(0, 0, 0, 0.6)) , url("images/loginbackground.png");
  background-color: black;

}

</style>
@php
$state = Session::get("loggedIn");
$user = Session::get("userData");
if ($state == 1) {
  if ($user->Name == "Student") {
    echo "<script>window.location.href='/student_home'</script>";
  } else {
    echo "<script>window.location.href='/home'</script>";
  }
}
@endphp
<div class="wrapper">
@if(isset($errorMessage))
  <div class="alert alert-danger" style="position:absolute;top:15%;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    invalid login details
  </div>
@endif
<form action="{{route('doLogin')}}" method="post">
  <div class="login row d-flex justify-content-center">

    {{csrf_field()}}
     <img style="height:130px; width:130px;" src="{{ URL::to('logonobg.png') }}">
     <input style="height:30px;" type="text" class="inputDesign" id="Email" name="Email" placeholder="Email">
      <input style="height:30px;margin-top:20px;" type="password" class="inputDesign" id="password" name="password" placeholder="password">
      <div class="custom-control form-control-lg custom-checkbox row d-flex justify-content-center text-center w-100" style="margin-top: 15px; height:35px;">  
          <input type="checkbox" class="custom-control-input" id="customCheck1">  
          <label class="custom-control-label" for="customCheck1" style="font-size:15px">Remember me</label>  
      </div>  
      <div class="row text-center d-flex justify-content-center text-center w-100">
        <a href="#">Forgot password</a><br>
      </div>
        <button style="margin-top: 10px; width:150px;padding:5px;margin-bottom:40px;" type="submit" class="btn btn-outline-dark">Login</button>

      </div>
    </form>

@endsection
