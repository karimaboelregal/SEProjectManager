@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
<form action="{{route('storeUserSub')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    <div class="modal modal-createTeam fade" id="viewImport">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;">

                    <h5 class="modal-title" id="viewTeamModalLabel">Import data</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body my-custom-scrollbar">

    <div class="justify-content-center"><input style="d-flex justify-content-center" type="file" id = "file" name= "file"  style="width:200px">
@foreach ($courses as $temp)
<li class="field">
<input class="checbkox" type="checkbox" name={{$temp->Name}} value=1 />
{{$temp->Name}}                                        
</li>
@endforeach                                          
</div>
<script>
 $(function(){

    $("#temp a").click(function(){

      $("#tempText").text($(this).text());
      $("#tempText").val($(this).text());
      if ($("#tempText").text() == "Teachers") {
        $("#sendThis").val("1");
      } else {
        $("#sendThis").val("0");
      }
   });

});
</script>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger closeModal" id="close" data-dismiss="modal">Close</button>


                        <button type="submit" class="btn btn-danger closeModal">Submit</button>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div style="margin-top:80px;width:100%;" class="row d-flex justify-content-center ">
    
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline" data-toggle="modal" id="import" data-target="#viewImport">Import data</button>
        </div>
        <div class="col-12 col-md-auto">
            <a href="{{route('download')}}" style="padding:5px; width: 150px;"class="btn btn-outline">Export data</a>
        </div>
        <div class="col-12 col-md-auto">
        <form action="{{url('users')}}" method="post" onsubmit="return confirm('do u really want to delete all users?');">
        {{csrf_field()}}

            <button style="padding:5px; width: 150px;"class="btn btn-outline">Delete all users</button>
        </form>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 180px;"class="btn btn-outline" >Delete selected users</button>

        </div>

    </div>
    <div style="margin-top:30px;width:100% !important;margin-bottom:50px;" class="row d-flex justify-content-center ">
    <div class="datatable-wide">

    <table id="userTable" class="table table-striped dt-responsive nowrap " style="width:100%">
    <thead>
        <tr class="text-center" style="background-color: #C63E47; color:white;">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col"><i class="fa fa-mouse-pointer"></i></i></th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            @foreach ($users as $user)
            
            <th height=150 width=150 scope="row">
                <div class="custom-control form-control-lg custom-checkbox">  
                <form action="{{route('deleteusers')}}" id="deleteForm" method="post">
                    {{csrf_field()}}
                    <input type="checkbox" class="custom-control-input" name='delete{{$user->id}}' value='{{$user->id}}' id={{$user->id}}>  
                    <label  class="custom-control-label" for={{$user->id}} style="">
                @if(file_exists('storage/profiles/'.$user->id.'.jpg')) 
                    <img width="100" height="100" src="{{asset('storage/profiles/'.$user->id.'.jpg') }}" width="40" height="40" class="rounded-circle" />
                @else
                    <img width="100" height="100" src="{{asset("profile.png") }}" alt="" />
                @endif

                    </label> </label>  
                </form>
                </div>  
            </th>
            <input name="userid" value={{$user->id}} type="hidden">
            <td class="align-middle">{{$user->Surname}}</td>
            <td class="align-middle">{{$user->Email}};</td>
            <td class="align-middle">{{$user->Name}}</td>
            <td class="align-middle"> <button class="btn btn-outline" onclick="window.location.href='edituser/{{$user->id}}'">edit</button></td>
        </tr>
        @endforeach
</tbody>
</table>
</div>
</div>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#userTable').DataTable({
        columnDefs: [
            { orderable: false, targets: 5 }
        ],
        responsive: true,
        "dom": '<"top" f>rt<"bottom"ip>',
        buttons: [{className: "btn-dark"}]
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
function SetEditModal()
{
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


    jQuery.ajax({
        url: "{{ route('fetchSubmission') }}",
        method: 'post',

        success: function(result){
            console.log(result);
            
            $("#filepath").val(result[0]['LaravelName']);

            //result[0]['OriginalName']
            //result[0]['LaravelName']
            //result[0]['created_at']


        },
        error:function(){
        alert("error");
        }


    });


}

</script>
    </div>
</div>

@endsection

