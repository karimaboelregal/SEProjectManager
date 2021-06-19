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

<div class="dropdown" style="margin-left: 5px;"">
  <button class="btn btn-secondary dropdown-toggle" style="background-color:#fff;color:black;style=border:none;"type="button" id="tempText" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{$selected->templateName}}
  </button>
  <div class="dropdown-menu" id="temp"aria-labelledby="tempText">
  @foreach ($projTemps as $proj)
    <a class="dropdown-item" href="{{url("projects/".Crypt::encrypt(($proj->id-1)))}}" >{{$proj->templateName}}</a>
  @endforeach
  </div>

</div>
<script>
 $(function(){

    $("#year a").click(function(){

      $("#yearText").text($(this).text());
      $("#yearText").val($(this).text());

   });
    $("#temp a").click(function(){

      $("#tempText").text($(this).text());
      $("#tempText").val($(this).text());

   });

});
</script>
    </div>

    <div style="margin-top:30px;max-width:100%;" class="row d-flex justify-content-center ">
        @foreach ($projects as $project)
        @if ($project->ProjectTemplateId == $selected->id)
        <div class="turningButtonContainer" style="width:300px;height:220px;">
            <div class="turningButtonContainerInner">
                <div class="turningButton"><i style="font-size:35px;margin-top:55px;color:#197419"class="icons far fa-dot-circle"></i><span style="font-size:30px;line-height:1.6">{{$project->ProjectTitle}}</span></div>
                <div class="turnedButton" style="padding:0px;">
                <p><p class="text-center" style="margin-top:-5px;"><b>Project idea :</b></p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;height:40px;">{{$project->ProjectDesc}}</p><br>
                <p class="text-center" style="margin-top:-25px;"><b>Team members:</b></p>
                <p class="text-center" style="margin-top:-10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height:40px;">Mohamed moatz, philip, joo assem, karim ehab</p><br>
                <div class='row justify-content-center' style="margin-top:-20px;margin-left:-30px;">
                <button onclick="location.href = '{{route('deleteProject',['id'=>$project->id])}}'" style="padding:5px;margin-left:20px;width:40px;height:35px;"class="btn btn-light norms" data-toggle="tooltip" title="delete course"><i class="fas fa-trash-alt"></i></button>
                <button onclick="location.href = '{{route('editProjectForm',['id'=>$project->id])}}'" style="padding:5px;margin-left:20px;width:40px;height:35px;"class="btn btn-light norms" data-toggle="tooltip" title="edit course info"><i class="fas fa-align-justify"></i></button>
                <button onclick="location.href = '{{route('ViewProject',['id'=>$project->id])}}'" style="padding:5px;margin-left:20px;width:40px;height:35px;"class="btn btn-light norms" data-toggle="tooltip" title="view project content"><i class="fas fa-eye"></i></button>
                </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
</body>
@endsection

