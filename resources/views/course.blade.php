@extends('layouts.app')
@section('content')
<script>
    var element = document.getElementById("courses");
    element.classList.add("show");
</script>

<body>
    <div class= "container">

        
    @foreach($courseInfo['courseObj'] as $course)
        <h2 Style="margin-top:5%;" >Welcome to {{$course->Name}}</h2>

        <h4 Style="margin-top:5%;">Course Description</h4>

        <p>{{$course->Description}}</p>

        <h4 Style="margin-top:5%;">Reading material</h4>

        <a href="#">News from the cloude</a>
        <br>
        <a href="#">The Agile manifesto</a>
    
    <h4 Style="margin-top:5%;">Surveys</h4>
        
        <div class="row">

        <button class="btn btn-outline" onclick="window.location.href='{{route('SurveyFromCourse',['id'=>$course->id])}}'">View Surveys</button>
        </div>

    @endforeach

    <h4 Style="margin-top:5%;">Project templates</h4>
        <button class="btn btn-outline" onclick="window.location.href='/createTemplate'">Create project template</button>
        <div class="row d-flex justify-content-center" style="width:80%;margin-top:2%;height:60vh;border:1px solid;border-radius:25px;border-color:#C63E47;overflow:auto;">
        
        @if(empty(json_decode($projTemps)))
            <h4 style= "margin-top:15px;color:blue;">Your templates are empty<br> click on the create project templates tab to start</h4>
        @endif
            @foreach ($projTemps as $temp)
            <div class="turningButtonContainer" style="width:200px;height:150px;">
                <div class="turningButtonContainerInner">
                    <div class="turningButton"><i style="font-size:25px;margin-top:20%;color:#197419"class="icons far fa-dot-circle"></i><span style="font-size:20px;line-height:1.6">{{$temp->templateName}}</span></div>
                    <div class="turnedButton" style="padding:0px;">
                        <button style="padding:5px;margin-left:25%;margin-top:25%;"class="btn btn-light norms" data-toggle="tooltip" title="view project content">Edit template</button>
                    </div>
                </div>
            </div>
            @endforeach
    </div>


    
    
    

    

    




    </div>

</body>
@endsection

