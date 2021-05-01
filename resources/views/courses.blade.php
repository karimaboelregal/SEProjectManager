@extends('layouts.sidebar')
@extends('layouts.app')
@section('content2')
<script>
var element = document.getElementById("courses");
element.classList.add("show");
</script>
<div class="container">
    <div style="margin-top:30px;" class="row text-center">
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:15px;"class="icons fa fa-undo"></i><span>SE</span></div>
                <div class="turnedButton">Course name: Software engeering course<br>Instructors: Doctor Essam, TA Nada</div>
            </div>
        </div>
        <div class="turningButtonContainer">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:15px;"class="icons fa fa-undo"></i><span>HCI</span></div>
                <div class="turnedButton">Course name: Human computer interaction<br>Instructors: Doctor Yomna, TA Nada</div>
            </div>
        </div>

    </div>
</div>
@endsection

