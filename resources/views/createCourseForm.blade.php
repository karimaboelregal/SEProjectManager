@extends('layouts.app')
@section('content')

<div class="content d-flex justify-content-center" style="margin:5% auto">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Course</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('createNewCourse')}}" method="post">
                                <div class="modal-body">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="name" class=" form-control-label">Course Name</label>
                                            <input type="text" id="coursename" name="Name" placeholder="Enter course name" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                            <input type="text" id="desc" name="Description" placeholder="Enter description" class="form-control"></div>
                                        <div class="form-group"><label for="code" class=" form-control-label">Code</label>
                                            <input type="number" id="code" name="Code" placeholder="Code" class="form-control"></div>  
                                        <div class="form-group">
                                            <label for="code" class=" form-control-label">Select Instructor</label>
                                            <select class="form-control" name="instructor_id">
                                                @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->Surname}}</option>
                                                @endforeach
                                            </select>
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

    <div class="clearfix"></div>



@endsection