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
    
     <img src='images/home3.jpg' width=90% height=500>
       
    </div>
    <div style="margin-top:30px;max-width:100%;" class="row d-flex justify-content-center ">
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>SE</span></div>
                <div class="turnedButton">
                <p><p class="text-center">Course name</p>
                <p class="text-center">Software engeering</p><br>
                <p class="text-center">Instructors</p>
                <p class="text-center">Doctor Essam, TA Nada</p></p>
                <button style="padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="view course contet" onclick="location.href = 'student_course'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>HCI</span></div>
                <div class="turnedButton">
                <p><p class="text-center">Course name</p>
                <p class="text-center">Human computer interaction</p><br>
                <p class="text-center">Instructors</p>
                <p class="text-center">Doctor Yomna, TA Nada</p></p>
                <button style="padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:28px;padding:5px;width:40px"class="btn btn-light norms" data-toggle="tooltip" title="view course contet" onclick="location.href = 'student_course'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>

</div>
<div style="margin-top:30px;max-width:100%;" class="row  justify-content-center ">
     <div class="col">
      <div class="card" style="width: 18rem;max-height:40%">
        <img src="images/team.png" class="card-img-top" alt="">
          <div class="card-body">
             <h5 class="card-title">Myteam</h5>
            <p class="card-text">Checkout the new content and keep yourself posted to your team.</p>
          <a href="student_team" class="btn btn-primary">Open Team</a>
      </div>  
      <div class="col">
     <div class="card" style="width: 18rem;">
        <img src="images/profile.png" class="card-img-top" alt="">
          <div class="card-body">
             <h5 class="card-title">Profile</h5>
            <p class="card-text">Click to Edit your Bio and Prefrences in your profile.</p>
          <a href="student_profile" class="btn btn-primary">Open profile</a>
    </div>
</div>
</div>





</div>
</body>
@endsection
