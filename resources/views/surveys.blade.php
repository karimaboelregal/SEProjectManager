@extends('layouts.app')
@section('content')
<script>
    var element = document.getElementById("users");
    element.classList.add("show");

</script>

</div>


<div style="margin-top:30px;width:100% !important;margin-bottom:50px;" class="row d-flex justify-content-center ">
    <div class="datatable-wide">
    
<button class="btn btn-outline" onclick="window.location.href='{{route('SurveyBuildIndex',['id'=>$surveys[0]->CourseId])}}'">Add Survey</button>







        <table id="userTable" class="table table-striped dt-responsive nowrap " style="width:100%">
            <thead>
                <tr class="text-center" style="background-color: #C63E47; color:white;">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
 
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    @foreach ($surveys as $survey)


                    <th height=150 width=150 scope="row">
                        <div class="custom-control form-control-lg custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2" style=""><img style="width:100%; height:100%" src="https://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com"></label> </label>
                        </div>
                    </th>
                    
                    <input name="userid" value={{$survey->id}} type="hidden">
                    <td class="align-middle">{{$survey->SurveyName}}</td>
                    
                    <td class="align-middle"><button class="btn btn-outline" onclick="window.location.href='{{route('ViewSurveyInsights',['id'=>$survey->id])}}'">View Insights</button></td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $.noConflict();
    jQuery(document).ready(function($) {
        $('#userTable').DataTable({
            columnDefs: [{
                orderable: false
                , targets: 2
            }]
            , responsive: true
            , "dom": '<"top" f>rt<"bottom"ip>'
            , buttons: [{
                className: "btn-dark"
            }]
        });
        $('#dtPluginExample_wrapper .col-md-7:eq(0)').addClass("d-flex justify-content-center justify-content-md-end");
        $('#dtPluginExample_paginate').addClass("mt-3 mt-md-2");
        $('#dtPluginExample_paginate ul.pagination').addClass("pagination-sm");

    })

</script>
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

