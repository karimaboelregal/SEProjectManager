@extends('layouts.app')
@section('content')
<script>
    var element = document.getElementById("users");
    element.classList.add("show");

</script>

</div>

<div style="margin-top:30px;width:100% !important;margin-bottom:50px;" class="row d-flex justify-content-center ">
    <div class="datatable-wide">

        <table id="userTable" class="table table-striped dt-responsive nowrap " style="width:100%">
            <thead>
                <tr class="text-center" style="background-color: #C63E47; color:white;">
                    <th scope="col">QuestionName</th>
                    <th scope="col">Students Name</th>
                    <th scope="col">Answer</th>

                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    @foreach ($surveys as $survey)

                    <input name="userid" value="fallable" type="hidden">
                    <td class="align-middle">{{$survey['QuestionText']}}</td>
                    <td class="align-middle">{{$survey["answer"][0]["Surname"]}}</td>


                    <td class="align-middle">{{$survey["answer"][0]["Answer"]}}</td>

                        
                    
                    


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

