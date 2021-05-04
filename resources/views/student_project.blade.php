@extends('layouts.student_topbar')
@section('content')

<script>
    var element = document.getElementById("projects");
    element.classList.add("show");

</script>



<div class ="container">
    <div style="margin-top:80px;max-width:100%;" class="row d-flex justify-content-center ">

<h1>Deliverables</h1>
</div>
    <div style="margin-top:80px;max-width:100%;" class="row d-flex justify-content-center ">
    <div class="col d-flex justify-content-center">
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419" class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">Proposal</span></div>
                <div class="turnedButton" style="padding:0px;">
                    <p>
                        <p class="text-center" style="margin-top:-5px;">Details</p>
                        <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">The software requirment specification is a document a super detailed document of how your software will be </p><br>
                    
                    <button type="submit" class="btn btn-light norms" style="margin-left:55px;padding:5px;width:100px;margin-top:0px;" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModalHorizontal">Add submission</button>



                </div>
            </div>
        </div>
    </div>
    <div class="col d-flex justify-content-center">
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
    <div class="col d-flex justify-content-center">
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

<div class="row d-flex justify-content-center">
        <button style="margin-top: 10px; margin-left:5px;width:150px; " type="button" class="btn btn-outline-dark">Suggestions</button>
        <button style="margin-top: 10px; margin-left:5px;width:150px;" type="button" class="btn btn-outline-dark">view details</button>
</div>

<!-- discussion section -->
<div class = "row d-flex justify-content-center" style="padding-left:20px;padding-top:20px;">
<h3>Discussion</h3>
</div>
<div class="row d-flex justify-content-center">
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
                <div class = "col-10 ">
                    <div class="col"><textarea id="review" name="review" style="height:70%;width:90%;" placeholder="Whats on your mind" maxlength="150"></textarea></div>
                </div>
                <div class = "col-2">
                    <button style="margin-top: 10px; width:100px; " type="button" class="btn btn-outline-dark">Send</button>
                    



                </div>
            </div>



        </div>
    </div>
</div>

</div>
<!-- Modal -->
<!-- myModalHorizontal -->
<div id="myModalHorizontal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Modal content -->
    <div class="modal-content">
        <div style="width:100.5%; height:40px; background-color:#C63E47;margin-left:-1px;">
            <p class="text-center" style="color:#fff;font-size:25px;">Select a file</p>
        </div>
        <input style="margin-left: 90px;margin-top:50px;" type="file" style="width:200px">
        <div class="row">
            <button style="padding:5px; width: 75px;margin-left:60px;margin-top:25px;" class="btn btn-outline">upload</button>
            <button style="padding:5px; width: 75px;margin-left:110px;margin-top:25px;" class="btn btn-outline"  class="close" data-dismiss="modal" aria-label="Close">close</button>
        </div>
    </div>
</div>



<style>
    /* projects tab */


    .turningButtonContainer {
        margin-left: 0px;
        margin-top: 0px;
    }
    

    
    html,body
    {
        width: 100% !important;
        height: 100% !important;
        margin: 0px !important;
        padding: 0px !important;
        overflow-x: hidden !important;
    }



   
</style>

@endsection

