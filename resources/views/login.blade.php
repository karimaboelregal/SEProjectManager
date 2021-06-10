@extends('layouts.app')

@section('content')
<style>
body {
  background-image: linear-gradient(rgba(0, 0, 0, 0.627),rgba(0, 0, 0, 0.6)) , url("images/loginbackground.png");
  background-color: black;

}

</style>
<div class="wrapper">
@if(isset($errorMessage))
  <div class="alert alert-danger" style="position:absolute;top:15%;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    invalid login details
  </div>
@endif

  <div class="login">
    <div class="loginHead ">

    <p class="text-center" style="color: white;font-family: Roboto;font-style: normal;font-size: 25px;line-height: 40px;user-select: none;">Login</p>
    <div class="#formContent">
    <form action="{{route('doLogin')}}" class="row d-flex justify-content-center" method="post">
    {{csrf_field()}}
      <div class="col-md-6 text-center">
     <input style="margin-top:30px;" type="text" class="inputDesign" id="Email" name="Email" placeholder="Email">
      <input style="margin-top:30px;" type="password" class="inputDesign" id="password" name="password" placeholder="password">
      <div class="custom-control form-control-lg custom-checkbox" style="margin-top: 15px; height:35px;">  
          <input type="checkbox" class="custom-control-input" id="customCheck1">  
          <label class="custom-control-label" for="customCheck1" style="font-size:15px">Remember me</label>  
      </div>  
        <a href="de7ko.com" class="text center">Forgot password</a><br>
        <button style="margin-top: 10px; width:150px;" type="submit" class="btn btn-outline-dark">Login</button>

      </div>
    </form>
    </div>
    </div>
  </div>
</div>
@endsection
