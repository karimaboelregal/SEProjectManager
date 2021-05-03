@extends('layouts.student_sidebar')
@extends('layouts.app')
@section('content2')
<script>
    var element = document.getElementById("profile");
    element.classList.add("show");

</script>




<body>
    <link href="{{ asset('css/student_profile.css') }}" rel="stylesheet">


<div class ="container-fluid" style="padding-top:20px;">

    <form method="">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        Maria antoinette
                    </h5>
                    <h6>
                        code, video games ..etc

                    </h6>
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Id</label>
                            </div>
                            <div class="col-md-6">
                                <p>2018/01447</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>Maria antoinette</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>maria1801447@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>preferences</label>
                            </div>
                            <div class="col-md-6">
                                <p>code, video games ..etc</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Skills</label>
                            </div>
                            <div class="col-md-6">
                                <p>c++, java,php</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Gpa</label>
                            </div>
                            <div class="col-md-6">
                                <p>3.2</p>
                            </div>
                        </div>


                    </div>
                    
                </div>
            </div>
        </div>
    </form>


</div>


</body>

@endsection


