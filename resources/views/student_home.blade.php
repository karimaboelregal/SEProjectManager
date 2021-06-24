@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>


<body>
   <!-- <div style="margin-top:30px;" class="row">
    
        <input style="width:75%;margin: 0 auto;" type="text" class="inputDesign text-center" name="Search" placeholder="Search"><button class="btn btn-outline"><i class="fa fa-search"></i></button>
    </div>-->
    
    <div style="margin-top:20px;max-width:100%;" class="row d-flex justify-content-center" >
    
     <img src='images/lms.jpg' width=90% height=500>
       
    </div>

    <div class="row d-flex justify-content-center" style="margin:30px; margin-left:50px;">

        <div class="col-sm ">
            <div class="card" style="width:100%;">
                <div class="row justify-content-center">
                    <img src="images/team.png" class="card-img-top" style="width:50%;" alt="">
                </div>
                <div class="card-body row justify-content-center">
                    <h5 class="card-title">My Teams</h5>
                    <p class="card-text">Checkout the new content and keep yourself posted to your team.</p>
                    <a href="student_team" class="btn btn-danger">Open Team</a>
                </div>
            </div>
        </div>
        <div class="col-sm"></div>
        <div class="col-sm" style="margin-right:45px">
            <div class="card">

                <div class="row justify-content-center">
                    <img src="images/profile.png" class="card-img-top" style="width:50%;height:50%;" alt="">
                </div>
                <div class="card-body row justify-content-center">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">Check out your profile where you can edit or view it.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a href="student_profile" class="btn btn-danger">Open profile</a>
                </div>
            </div>
        </div>
    </div>
    
        <h3 style="margin:15px;">
            Your Courses
        </h3>

    
    

    <div style="margin-top:30px;margin-bottom:30px;max-width:100%;" class="row d-flex justify-content-center ">
        @foreach ($courses as $course)
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>{{$course->Name}}</span></div>
                <div class="turnedButton">
                <p><p class="text-center">{{$course->Name}}</p>
                <p class="text-center">{{$course->Code}}</p><br>
                <p class="text-center">Instructors</p>
                <p class="text-center">{{$course->InstructorName}}</p></p>
                <button style="padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="view course contet" onclick="location.href = '{{route('ViewStudentCourse',['id'=>$course->id])}}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        @endforeach
</div>







</div>
</body>
@endsection
