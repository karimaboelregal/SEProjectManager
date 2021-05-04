@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("projects");
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
            <button style="width: 150px;"class="btn btn-outline">Delete all projects</button>
            <div class="dropdown" style="margin-left: 5px;"">
  <button class="btn btn-secondary dropdown-toggle" id="yearText" style="background-color:#fff;color:black;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2021
  </button>
  <div class="dropdown-menu" id="year"aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">2021</a>
    <a class="dropdown-item" href="#">2020</a>
    <a class="dropdown-item" href="#">2019</a>
  </div>
</div>
<script>
 $(function(){

    $("#year a").click(function(){

      $("#yearText").text($(this).text());
      $("#yearText").val($(this).text());

   });

});
</script>
    </div>

    <div style="margin-top:30px;max-width:100%;" class="row d-flex justify-content-center ">
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">School system</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:175px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#ff0000"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:175px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#FFFF00"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6;">Photography hhhsdfasdf</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;">Project idea(brief)</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Its a system to manage school students to make it easier and faster</p><br>
                <p class="text-center" style="margin-top:-25px;">Team members</p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <button style="padding:5px;margin-left:20px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button style="margin-left:65px;padding:5px;width:40px;margin-top:-60px;"class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>


    </div>
</div>
</body>
@endsection

