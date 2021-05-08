@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
<div class="content d-flex align-items-center justify-content-center" style="height:92vh">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Project idea presentation</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('createNewProject')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Project title</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">School system</label></div>
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Project Description</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">It's a system designed to manage schools</label></div>
                                        <div class="form-group text-center"><label for="name" class="form-control-label">Team members</label><br>
                                            <label for="name" style="font-size:20px;" class="form-control-label">member1, member2, member3</label></div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{route('index')}}'" type="button" class="btn btn-outline" data-dismiss="modal">Deny</button>
                                        <button class="btn btn-outline" type="submit" value="submit">approve</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                


        </div><!-- .animated -->
    </div><!-- .content -->




@endsection