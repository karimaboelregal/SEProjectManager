@extends('layouts.sidebar')
@extends('layouts.app')
@section('content2')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div style="width:100%; height:40px; background-color:#C63E47"><p class="text-center" style="color:#fff;font-size:25px;">Select a file</p></div>
    <input style="margin-left: 90px;margin-top:50px;" type="file" style="width:200px">
    <div class="row">
<button style="padding:5px; width: 75px;margin-left:60px;margin-top:25px;"class="btn btn-outline">upload</button>
<button style="padding:5px; width: 75px;margin-left:110px;margin-top:25px;"class="btn btn-outline" id="close">close</button>
</div>
</div>
</div>
<div class="container">
    <div style="margin-top:30px;" class="row text-center">
    </div>
    <div style="margin-top:30px;margin-left:80px;" class="row">
        <div class="col-12 col-md-auto">
            <input  type="text" class="inputDesign" name="Search" placeholder="Search"><button style="margin-left:5px;"class="btn btn-outline"><i class="fa fa-search"></i></button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline" id="import">Import data</button>
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
<script>
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("import");
var span = document.getElementById("close");

// Get the <span> element that closes the modal

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    </div>
</div>

@endsection

