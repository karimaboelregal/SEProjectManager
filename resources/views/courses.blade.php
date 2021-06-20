@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("courses");
element.classList.add("show");
</script>
<body>

    <div style="margin-top:80px;max-width:100%;" class="row d-flex justify-content-center ">
            <input style="width:550px;"type="text" class="inputDesign" name="Search" placeholder="Search"><button style="margin-left:5px;"class="btn btn-outline"><i class="fa fa-search"></i></button>
    </div>
    <div style="margin-top:20px;max-width:100%;"  class="row d-flex justify-content-center ">
        <button onclick="location.href = '{{route('createCourseForm')}}'" style="width: 150px; margin-left:5px;"class="btn btn-outline">Add course</button>
    </div>
    <div style="margin-top:30px;max-width:100%;" class="row d-flex justify-content-center ">
        @foreach ($courses as $course)
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>{{$course->Name}}</span></div>
                    <div class="turnedButton">
                        <p><p class="text-center">Course Name</p>
                        <p class="text-center">{{$course->Name}}</p><br>
                        <p class="text-center">Instructor</p>
                        <p class="text-center">{{$course->instructor_name}}</p></p>
                        <button style="padding:5px;width:40px" data-toggle="modal" data-target="#myModalHorizontal" data-toggle="tooltip"  class="btn btn-light norms" title="delete course"><i class=" fas fa-trash-alt"></i></button>

                        <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="edit course info" onclick="location.href = '{{route('editCourseForm',['id'=>$course->id])}}'"><i class="fas fa-align-justify"></i></button>
                        <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="view course contet" onclick="location.href = '{{route('ViewCourse',['id'=>$course->id])}}'"><i class="fas fa-eye"></i></button>
                    </div>
            </div> 
        </div>
        @endforeach
    </div>
</body>



<!-- Modal -->
<!-- myModalHorizontal -->
<div id="myModalHorizontal" class="modal modal-file" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Modal content -->
    <div class="modal-content modal-file-content">
        

            <div style="width:100.5%; height:40px; background-color:#C63E47;margin-left:-1px;">
                <p class="text-center" style="color:#fff;font-size:25px;">Are you want to delete</p>
            </div>

            <div class="row">
                <button style=" width: 75px;margin-left:110px;margin-top:25px;" class="btn btn-outline" class="close" data-dismiss="modal" aria-label="Close">Yes</button>
                <button style=" width: 75px;margin-left:90px;margin-top:25px;" class="btn btn-outline" class="close" data-dismiss="modal" aria-label="Close">No</button>
            </div>
        
    </div>
</div>




@endsection
