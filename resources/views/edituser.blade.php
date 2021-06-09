@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>

<div class="content d-flex align-items-center justify-content-center" style="height:92vh">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Edit user</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('createNewProject')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="name" class=" form-control-label">Name</label>
                                            <input type="text" id="project_title" name="project_title" placeholder="karim mohamed" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Email</label>
                                            <input type="text" id="desc" name="description" placeholder="karim@gmail.com" class="form-control"></div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Select Role</label>
                                            <select class="form-control" name="team_id">
                                                <option>Admin</option>
                                                <option>Professor</option>
                                                <option>Student</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Courses</label>
                                        <div class="custom-control form-control-lg custom-checkbox" style="margin-top:-15px">  
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">  
                                        <label class="custom-control-label" for="customCheck1" style="font-size:15px">SE</label>  
                                        </div>  
                                        <div class="custom-control form-control-lg custom-checkbox" style="margin-top:-15px">  
                                        <input type="checkbox" class="custom-control-input" id="asd">  
                                        <label class="custom-control-label" for="asd" style="font-size:15px">HCI</label>  
                                        </div>  

                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{route('index')}}'" type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                                        <button class="btn btn-outline" type="submit" value="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                


        </div><!-- .animated -->
    </div><!-- .content -->




@endsection