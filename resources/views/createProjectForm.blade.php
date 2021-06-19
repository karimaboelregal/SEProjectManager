@extends('layouts.student_topbar')
@section('content')

<div class="content d-flex align-items-center justify-content-center">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Project</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('createNewProject')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="name" class=" form-control-label">Project title</label>
                                            <input type="text" id="project_title" name="project_title" placeholder="Enter project name" class="form-control" required></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                            <input type="text" id="desc" name="description" placeholder="Enter description" class="form-control" required></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client number</label>
                                            <input type="text" id="desc" name="client_number" placeholder="Enter client number" class="form-control" required></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client name</label>
                                            <input type="text" id="desc" name="client_name" placeholder="Enter client name" class="form-control" required></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Client Email</label>
                                            <input type="text" id="desc" name="client_email" placeholder="Enter client email" class="form-control" required></div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Select team</label>
                                            <select class="form-control" name="team_id" required>
                                                @foreach($teams as $team)
                                                <option value="{{$team->id}}">{{$team->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">

                                        <label for="code" class=" form-control-label">Select project template</label>
                                            <select class="form-control" name="tempID" required>
                                            
                                                @foreach($project_templates as $temp)

                                                <option value="{{$temp->id}}">{{$temp->templateName}}</option>
                                                @endforeach
                                            </select>
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