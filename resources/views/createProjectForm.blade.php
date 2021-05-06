@extends('layouts.app')
@section('content')

<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                 

                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Project</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('createNewProject')}}" method="post">
                                <div class="modal-body">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="name" class=" form-control-label">Project title</label>
                                            <input type="text" id="project_title" name="project_title" placeholder="Enter project name" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                            <input type="text" id="desc" name="description" placeholder="Enter description" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client number</label>
                                            <input type="text" id="desc" name="client_number" placeholder="Enter client number" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client name</label>
                                            <input type="text" id="desc" name="client_name" placeholder="Enter client name" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client Email</label>
                                            <input type="text" id="desc" name="client_email" placeholder="Enter client email" class="form-control"></div>
                                        <div class="form-group">
                                            {!! Form::Label('team', 'Select Team') !!}
                                            <select class="form-control" name="team_id">
                                                @foreach($teams as $team)
                                                <option value="{{$team->id}}">{{$team->id}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::Label('course', 'Select course') !!}
                                            <select class="form-control" name="course_id">
                                                @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{route('index')}}'" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit" value="submit">submit</button>
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