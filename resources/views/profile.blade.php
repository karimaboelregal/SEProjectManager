@php
$thisthing;
if (\Session::get("userData")->Name == "Student") {
    $thisthing = 1;
} else {
    $thisthing = 0;
}
@endphp
@extends((($thisthing ? 'layouts.student_topbar' : 'layouts.app' )))

@section('content')

<body>
    <link href="{{ asset('css/student_profile.css') }}" rel="stylesheet">


<div class ="container-fluid" style="padding-top:20px;max-width:50%;">
<form action="{{route('editedProfile')}}" method="post" >
{{csrf_field()}}
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
                    
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
            <button onclick='return changeForm()' type="button" id="editProf" class="btn btn-outline" >Edit profile</button>
            <button type="submit" id='hidden_save' class="btn btn-outline" style="display:none;" >save</button>
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
                                <p id="surname">{{\Session::get("userData")->Surname ?? 'none'}}</p>
                                <input type="hidden" name="surnameInput" id="surnameInput" value="{{\Session::get("userData")->Surname ?? 'none'}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p id="email">{{\Session::get("userData")->Email ?? 'none'}}</p>
                                <input type="hidden" name="emailInput" id="emailInput" value="{{\Session::get("userData")->Email ?? 'none'}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p id="phone">{{\Session::get("userData")->Phone ?? 'none'}}</p>
                                <input type="hidden" name="phoneInput" id="phoneInput" value="{{\Session::get("userData")->Phone ?? 'none'}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>preferences</label>
                            </div>
                            <div class="col-md-6" >
                            <input type='text' id='prefin' style="display:none;">
                                <p id='pref' >{{\Session::get("userData")->Preference?? 'none'}}</p>
                                <input type="hidden" name="prefInput" id="prefInput" value="{{$information->Preference?? 'none'}}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>University ID</label>
                            </div>
                            <div class="col-md-6">
                                <p id="skills">{{\Session::get("userData")->Skills ?? 'none'}}</p>
                                <input type="hidden" name="UniversityId" id="UniversityId" value="{{\Session::get("userData")->Skills ?? 'none'}}" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Gpa</label>
                            </div>
                            <div class="col-md-6">
                                <p id="gpa">{{\Session::get("userData")->GPA}}</p>
                                <input type="hidden" name="gpaInput" id="gpaInput" value="{{\Session::get("userData")->GPA}}" required>
                            </div>
                        </div>
                        
                        <div class="row">
                         <div class='col-md-2'>
                         </div>
                        </div>


                    </div>
                    
                </div>
            </div>
        </div>
       
    </form>
<script>
function changeForm() {
	var preference = document.getElementById("pref");
	var hiddenPref = document.getElementById("prefInput");
	var Phone = document.getElementById("phone");
	var hiddenphone = document.getElementById("phoneInput");
	var skills = document.getElementById("skills");
	var hiddenskills = document.getElementById("UniversityId");
    var gpa = document.getElementById("gpa");
	var hiddengpa = document.getElementById("gpaInput");
    var surname = document.getElementById("surname");
	var surnamehidden = document.getElementById("surnameInput");
    var email = document.getElementById("email");
	var emailhidden = document.getElementById("emailInput");
	if (hiddenPref.type == "hidden") {
		hiddenPref.type = "text";
        hiddenphone.type = "text";
        hiddenskills.type = "text";
        hiddengpa.type = "text";
        surnamehidden.type = "text";
        emailhidden.type = "text";
		preference.style.display = "none";
        Phone.style.display = "none";
        skills.style.display = "none";
        gpa.style.display = "none";
        surname.style.display="none";
        email.style.display="none";		
		document.getElementById("hidden_save").style.display="block";
        document.getElementById("editProf").style.display="none";
        
	}
	return false;
}
</script>

</div>


</body>

@endsection


