@extends('layouts.app')
@section('content')

<div class="content d-flex align-items-center justify-content-center" style="height:80vh">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Edit </strong><small> profile</small></div>
                            <div class="card-body card-block">
                            <form action="{{route('student_profile')}}" method="post">
                                <div class="modal-body">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="phone" class=" form-control-label"> phone</label>
                                            <input type="number" id="phone" name="Phone" placeholder="01234567891" class="form-control"></div>
                                        <div class="form-group"><label for="pref" class=" form-control-label">Prefrences</label>
                                            <input type="text" id="pref" name="Prefrence" placeholder="Enter pref" class="form-control"></div>
                                        <div class="form-group"><label for="Skills" class=" form-control-label">SKills</label>
                                            <input type="text" id="skills" name="Skills" placeholder="Skills" class="form-control"></div>  
                                        <div class="form-group"><label for="gpa" class=" form-control-label"> Gpa</label>
                                            <input type="number" id="gpa" name="Gpa" placeholder="0.0" class="form-control"></div>
                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{route('student_profile')}}'" type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
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