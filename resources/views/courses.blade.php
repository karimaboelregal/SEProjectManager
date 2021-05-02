@extends('layouts.sidebar')
@extends('layouts.app')
@section('content2')
<script>
var element = document.getElementById("courses");
element.classList.add("show");
</script>
<body>
<div class="container-fluid" >
    <div style="margin-top:30px;" class="row">
    
        <input style="width:75%;margin: 0 auto;" type="text" class="inputDesign text-center" name="Search" placeholder="Search"><button class="btn btn-outline"><i class="fa fa-search"></i></button>
    </div>
    <div style="margin-top:30px;margin-left:100px;max-width:75vh;" class="row text-center">
        <div class="turningButtonContainer" >
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>SE</span></div>
                <div class="turnedButton"><p><p class="text-center">Course name</p><p class="text-center">Software engeering</p><br><p class="text-center">Instructors</p> <p class="text-center">Doctor Essam, TA Nada</p></p></div>
            </div>
        </div>
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;"class="icons far fa-dot-circle"></i><span>HCI</span></div>
                <div class="turnedButton"><p><p class="text-center">Course name</p><p class="text-center">Human computer interaction</p><br><p class="text-center">Instructors</p> <p class="text-center">Doctor Yomna, TA Nada</p></p></div>
            </div>
        </div>

    </div>
</div>
</body>
@endsection

