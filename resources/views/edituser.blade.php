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
                            <form action="{{route('submitEdited')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="ID" value={{$users[0]->id}}>
                                        <div class="form-group"><label for="name" class=" form-control-label">Name</label>
                                            <input type="text" id="project_title" name="name" value={{$users[0]->Surname}} class="form-control" required></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Email</label>
                                            <input type="text" id="desc" name="email" value={{$users[0]->Email}} class="form-control" required></div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Select Role</label>
                                            <select class="form-control" name="role" required>
                                            @foreach ($roles as $role)
                                                @if ($role->id ==  $users[0]->RoleId) 
                                                    <option value={{$role->id}} selected>{{$role->Name}}</option>
                                                @else
                                                    <option value={{$role->id}}>{{$role->Name}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Courses</label>
                                        @foreach ($courses as $course)
                                        <div class="custom-control form-control-lg custom-checkbox" style="margin-top:-15px">  
                                        @foreach ($enrolled as $enroll)
                                        @if($enroll->CourseId == $course->id)
                                        <input type="checkbox" class="custom-control-input" id="{{$course->Name}}" name={{$course->Name}} value=1 checked> 
                                        @else
                                        <input type="checkbox" class="custom-control-input" id="{{$course->Name}}" name={{$course->Name}} value=1> 
                                        @endif 
                                        @endforeach
                                        <label class="custom-control-label" for="{{$course->Name}}" style="font-size:15px">{{$course->Name}}</label>  
                                        </div>  
                                        @endforeach

                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{URL::previous()}}'" type="button" class="btn btn-outline" data-dismiss="modal">Back</button>
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