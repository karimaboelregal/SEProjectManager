@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("teams");
    element.classList.add("show");

</script>
<div class="container">
    
    <div style="margin-top:30px; margin-left: 60px;" class="row">
    <div class="col-12 col-md-auto">
    <div style="margin-top:30px;" class="row">
        <button style="padding:5px; width: 150px;" class="btn btn-outline">invitations</button>
    </div>
    </div>

        <table class="table">
            <thead>
                <tr class="text-center" style="background-color: #C63E47; color:white;">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Courses</th>
                    <th scope="col"><i class="fa fa-mouse-pointer"></i></i></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th height=100 width=150 scope="row">
                        <div class="align-middle custom-control form-control-lg custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class=" custom-control-label" for="customCheck1" style=""><img style="width:100%; height:100%" src="{{ URL::to('/images/image.jpg') }}"></label> </label>
                        </div>
                    </th>
                    <td class="align-middle">Project Name</td>
                    <td class="align-middle">SE,HCI</td>
                    <td class="align-middle"> <button class="btn btn-outline">view</button></td>
                </tr>
               
            </tbody>
        </table>
    </div>
    <div style="margin-top:30px; margin-left: 60px;" class="row text-center">

        <button class="btn btn-outline"><
            </button>
                <h6 style="margin-top:10px;" class="text-center">&nbsp;Page 1 of 5&nbsp;</h6>
                <button class="btn btn-outline">></button>

    </div>
</div>

@endsection

