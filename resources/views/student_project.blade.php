@extends('layouts.student_sidebar')
@extends('layouts.app')
@section('content2')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>

<body>
<style>
/* projects tab */


.turningButtonContainer{
    margin-left:0px;
    margin-top:0px;
}



</style>

<div class ="container">

<h1>Deliverables</h1>
<div class = "row">
    <div class="col">
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419" class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">Proposal</span></div>
                <div class="turnedButton" style="padding:0px;">
                    <p>
                        <p class="text-center" style="margin-top:-5px;">Details</p>
                        <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">The software requirment specification is a document a super detailed document of how your software will be </p><br>
                    <button style="margin-left:55px;padding:5px;width:100px;margin-top:0px;" class="btn btn-light norms" data-toggle="tooltip" title="Add Submission">Add Submission</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419" class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">SRS</span></div>
                <div class="turnedButton" style="padding:0px;">
                    <p>
                        <p class="text-center" style="margin-top:-5px;">Details</p>
                        <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">The software requirment specification is a document a super detailed document of how your software will be </p><br>
                        <button style="margin-left:55px;padding:5px;width:100px;margin-top:0px;" class="btn btn-light norms" data-toggle="tooltip" title="Add Submission">Add Submission</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419" class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">SDD</span></div>
                <div class="turnedButton" style="padding:0px;">
                    <p>
                        <p class="text-center" style="margin-top:-5px;">Details</p>
                        <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">One of the most technical material you would ever use</p><br>
                        <button style="margin-left:55px;padding:5px;width:100px;margin-top:0px;" class="btn btn-light norms" data-toggle="tooltip" title="Add Submission">Add Submission</button>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="row">
    <div class="col">
        <button style="margin-top: 10px; width:150px; " type="button" class="btn btn-outline-dark">Suggestions</button>
    </div>
    <div class="col">
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Open</button>

    </div>

</div>

<!-- discussion section -->
<div class = "row" style="padding-left:20px;padding-top:20px;">
<h3>Discussion</h3>
</div>
<div class="row">
    <div class="col-sm-7">
        
        <hr />
        <div class="review-block">
            <div class="row">
                <div class="col-sm-3">
                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                    <div class="review-block-name"><a href="#">Dr. Essam</a></div>
                    
                </div>
                <div class="col-sm-9">
                    
                    <div class="review-block-description">Add More Wire frames</div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class= "col">
                    <textarea id="review" name="review" style="height:50%" placeholder="Whats on your mind" maxlength="150"></textarea>
                </div>
            </div>



        </div>
    </div>
</div>

</div>

</body>
@endsection

