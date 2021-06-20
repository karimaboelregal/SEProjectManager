@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("projects");
element.classList.add("show");
</script>
<div class="content d-flex align-items-center justify-content-center" style="height:92vh">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Project idea presentation</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('projectstate',$projID)}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Title</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">{{$project[0]->ProjectTitle}}</label></div>
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Project Description</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">{{$project[0]->ProjectDesc}}</label></div>
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Team members</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">@foreach($project as $p) {{$p->Surname}}, @endforeach</label></div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                    <input type="hidden" name="idHidden" value="{{$project[0]->id}}">
                                        <button class="btn btn-outline" type="submit" value="1" name="state">deny</button>
                                        <button class="btn btn-outline" type="submit" value="2" name="state">approve</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                


        </div><!-- .animated -->
    </div><!-- .content -->




@endsection