@extends('layouts.sidebar')
@extends('layouts.app')
@section('content2')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
<div class="container">
    <div style="margin-top:30px;" class="row text-center">
    <img style="width:100%; height:350px;margin-left:5px;" src="{{ URL::to('/images/users2.png') }}">
    </div>
    <div style="margin-top:30px;" class="row">
        <div class="col-12 col-md-auto">
            <input  type="text" class="inputDesign" name="Search" placeholder="Search"><button style="margin-left:5px;"class="btn btn-outline"><i class="fa fa-search"></i></button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline">Import data</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline">Export data</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline">Delete all users</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 180px;"class="btn btn-outline">Delete selected users</button>

        </div>

    </div>
    <div style="margin-top:30px; margin-left: 60px;" class="row">

    <table class="table">
    <thead>
        <tr class="text-center" style="background-color: #C63E47; color:white;">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Courses</th>
            <th scope="col"><i class="fa fa-mouse-pointer"></i></i></th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr >
            <th height=100 width=150 scope="row">
                <div class="align-middle custom-control form-control-lg custom-checkbox">  
                    <input type="checkbox" class="custom-control-input" id="customCheck1">     
                    <label  class=" custom-control-label" for="customCheck1" style=""><img style="width:100%; height:100%" src="{{ URL::to('/images/image.jpg') }}"></label> </label>  
                </div>  
            </th>
            <td class="align-middle">Ahmed adel</td>
            <td class="align-middle">ahmedadel@gmail.com</td>
            <td class="align-middle">SE,HCI,105</td>
            <td class="align-middle"> <button class="btn btn-outline">edit</button></td>
        </tr>
        <tr>
            <th height=150 width=150 scope="row">
                <div class="custom-control form-control-lg custom-checkbox">  
                    <input type="checkbox" class="custom-control-input" id="customCheck2">  
                    <label  class="custom-control-label" for="customCheck2" style=""><img style="width:100%; height:100%" src="https://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com"></label> </label>  
                </div>  
            </th>
        <td class="align-middle">Jacob</td>
        <td class="align-middle">Thornton</td>
        <td class="align-middle">@fat</td>
            <td class="align-middle"> <button class="btn btn-outline">edit</button></td>
    </tr>
        <tr>
            <th height=100 width=150 scope="row">
                <div class="custom-control form-control-lg custom-checkbox">  
                    <input type="checkbox" class="custom-control-input" id="customCheck3">     
                    <label  class="custom-control-label" for="customCheck3" style=""><img style="width:100%; height:100%" src="{{ URL::to('/images/image2.jpg') }}"></label> </label>  
                </div>  
            </th>
        <td class="align-middle">Larry</td>
        <td class="align-middle">the Bird</td>
        <td class="align-middle">@twitter</td>
            <td class="align-middle"> <button class="btn btn-outline">edit</button></td>

    </tr>
</tbody>
</table>
    </div>
    <div style="margin-top:30px; margin-left: 60px;" class="row text-center">

    <button class="btn btn-outline"><</button>
    <h6 style="margin-top:10px;"class="text-center">&nbsp;Page 1 of 5&nbsp;</h6>
    <button class="btn btn-outline">></button>

    </div>
</div>

@endsection

