@extends('layouts.student_topbar')
@section('content')
<script>
function changeForm() {
	var preference = document.getElementById("pref");
	var hiddenPref = document.getElementById("prefin");
	var Phone = document.getElementById("phone");
	var hiddenphone = document.getElementById("phonein");
	var skills = document.getElementById("sKills");
	var hiddenskills = document.getElementById("skillsin");
    var gpa = document.getElementById("gpa");
	var hiddengpa = document.getElementById("gpain");
	if (hiddenpref.type == "hidden") {
		hiddenpref.type = "text";
        hiddenPhone.type = "text";
        hiddenskills.type = "text";
        hiddengpa.type = "text";
		preference.style.display = "none";
        phone.style.display = "none";
        skills.style.display = "none";
        gpa.style.display = "none";
		
		
		hidden_save.removeAttribute("hidden");
	}
	return false;
}
</script>




<body>
    <link href="{{ asset('css/student_profile.css') }}" rel="stylesheet">


<div class ="container-fluid" style="padding-top:20px;max-width:50%;">
@foreach ($userinfo as $information)
    <form method="">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="profile-head">
                    
                    <h6 >
                    {{$information->Preference}}

                    </h6>
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
            <button onclick='return changeForm()' type="button" class="btn btn-outline" >Edit profile</button>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-12 text-center">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$information->Surname}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$information->Email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                            <input type='text' id='phonein' style="display:none;">
                                <p>{{$information->Phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>preferences</label>
                            </div>
                            <div class="col-md-6" >
                            <input type='text' id='prefin' style="display:none;">
                                <p id='pref' >{{$information->Preference}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Skills</label>
                            </div>
                            <div class="col-md-6">
                            <input type='text' id='skillsin' style="display:none;">
                                <p>{{$information->Skills}}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Gpa</label>
                            </div>
                            <div class="col-md-6">
                            <input type='text' id='gpain' style="display:none;">
                                <p>{{$information->GPA}}</p>
                            </div>
                        </div>
                        
                        <div class="row">
                         <div class='col-md-12'>
                          <button onclick='changeForm()' type="button" id='hidden_save' class="btn btn-outline" style="display:none;" >save</button>
                         </div>
                        </div>


                    </div>
                    
                </div>
            </div>
        </div>
        
       
    </form>
@endforeach

</div>


</body>

@endsection


