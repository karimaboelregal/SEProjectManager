@extends('layouts.app')

@section('content')
<div class="wrapper">
  <div class="login">
    <div class="loginHead ">
    <p class="text-center" style="color: white;font-family: Roboto;font-style: normal;font-size: 25px;line-height: 40px;user-select: none;">Login</p>
    <div class="#formContent">
    <form class="row d-flex justify-content-center">
      <div class="col-md-6 text-center">
     <input style="margin-top:30px;" type="text" class="inputDesign" name="Username" placeholder="username">
      <input style="margin-top:30px;" type="password" class="inputDesign" name="Password" placeholder="password">
      <div class="custom-control form-control-lg custom-checkbox" style="margin-top: 15px; height:35px;">  
          <input type="checkbox" class="custom-control-input" id="customCheck1">  
          <label class="custom-control-label" for="customCheck1" style="font-size:15px">Remember me</label>  
      </div>  
        <a href="de7ko.com" class="text center">Forgot password</a><br>
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Login</button>

      </div>
    </form>
    </div>
    </div>
  </div>
</div>
@endsection
