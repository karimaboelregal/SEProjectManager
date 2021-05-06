@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("courses");
element.classList.add("show");
</script>
<body>
   <!-- <div style="margin-top:30px;" class="row">
    
        <input style="width:75%;margin: 0 auto;" type="text" class="inputDesign text-center" name="Search" placeholder="Search"><button class="btn btn-outline"><i class="fa fa-search"></i></button>
    </div>-->
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
                        <button style="padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="delete course" onclick="location.href = '{{route('deleteCourse',['id'=>$course->id])}}'"><i class="fas fa-trash-alt" ></i></button>
                        <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="edit course info" onclick="location.href = '{{route('editCourseForm',['id'=>$course->id])}}'"><i class="fas fa-align-justify"></i></button>
                        <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="view course contet" onclick="location.href = '{{route('ViewCourse',['id'=>$course->id])}}'"><i class="fas fa-eye"></i></button>
                    </div>
            </div> 
        </div>
        @endforeach
    </div>
</body>
@endsection
