@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
<div style="margin-top:30px;max-width:100%;" class="row d-flex justify-content-center ">
<div style="width:600px; height:450px;border-radius:5px;border:1px solid #C63E47;margin-top:50px;">
<a style="font-size:20px;margin-left:40px;margin-top:30px;">Name:</a> <input style="width:75%;margin-left:20px;margin-top:30px;" type="text" class="inputDesign" name="name" placeholder="karim mohamed"><br>
<a style="font-size:20px;margin-left:40px;margin-top:30px;">Email:</a> <input style="width:75%;margin-left:20px;margin-top:30px;" type="text" class="inputDesign" name="name" placeholder="karim@gmail.com"><br>
<a style="font-size:20px;margin-left:40px;margin-top:30px;">Email:</a> 
<div class="custom-control custom-checkbox">  
    <a style="font-size:20px;">Courses: </a>
    <input style="margin-left:30px;margin-top:5px;"type="checkbox" class="custom-control-input" id="customCheck1">  
    <label style="margin-left:30px;margin-top:5px;" class="custom-control-label" for="customCheck1" style="font-size:15px">Remember me</label>  
</div>  


</div> 
</div>


@endsection

