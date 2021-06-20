@extends('layouts.student_topbar')
@section('content')

    
<meta name="csrf-token" content="{{ csrf_token() }}">


<link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css')}}" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />

<h2 Style="margin-top:5%;">{{$surveyObj[0]['SurveyName']}}</h2>






<style>

    input[type=radio] {
        background-color: #C63E47 !important;
        color:#C63E47 !important;
    
        transform: scale3d(.5,.5,1);
    }
    
    .sv_qstn label.sv_q_m_label {
    position: absolute;
    margin: 0px;
    display: block;
    width: 50%;
    }


   
 


    .sv_main.sv_main.sv_bootstrapmaterial_css .btn-default.active {
    background-color: #C63E47;

    color: rgb(255, 255, 255);
    }

    .btn{
        background-color:#d9534f !important;

    }


</style>

<script>
    surveyId = {{$surveyObj[0]['id']}}


</script>


<script>
    var element = document.getElementById("home");
    element.classList.add("show");
</script>

<div id="surveyElement" style="display:inline-block;width:100%;"></div>
<div id="surveyResult"></div>



<script>
Survey.defaultBootstrapMaterialCss.navigationButton = "btn btn-red";
Survey.defaultBootstrapMaterialCss.rating.item = "btn btn-default my-rating";



Survey.StylesManager.applyTheme("bootstrapmaterial");


var json = {
    pages: [
        {
        questions: [
            @if(getType(array_search("matrix",array_column($surveyObj,'typeName'),true)) != 'boolean' )
                {
                type: "matrix",
                name: "Quality",
                title: "Please indicate if you agree or disagree with the following statements",
                	isAllRowRequired:true,


                columns: [
                    {value: 1,text: "Strongly Disagree"}, 
                    {value: 2,text: "Disagree"}, 
                    {value: 3,text: "Neutral"},
                    {value: 4,text: "Agree"}, 
                    { value: 5,text: "Strongly Agree"}
                ],
                rows: [
                    @foreach($surveyObj as $survey)
                        @if($survey['typeName'] == 'matrix')
                            {value: "{{$survey['questionId']}}",text: "{{$survey['QuestionText']}}"},
                            


                        @endif

                    @endforeach



                    // {value: "affordable",text: "Lecture was fully understandable"},
                    //{value: "does what it claims",text: "Scrum is the best agile method there is"},
                    //{value: "better then others",text: "The waterfall method is for large scale projects"},
                    //{value: "easy to use",text: "I will work with agile from now on"}
                ]
                },
            @endif//first question end
            @if(getType(array_search("rating",array_column($surveyObj,'typeName'),true)) != 'boolean' )
            

                @foreach($surveyObj as $survey)
                @if($survey['typeName'] == 'rating')
                {

                    type: "rating",
                    name: "{{$survey['questionId']}}",
                    isRequired:true,
                    title: "{{$survey['QuestionText']}}",
                }, //second question end
                @endif
                @endforeach
                
            

            @endif
            
        
      
            @if(getType(array_search("text",array_column($surveyObj,'typeName'),true)) != 'boolean' )

                    @foreach($surveyObj as $survey)
                    @if($survey['typeName'] == 'text')
                    {
                        type: "comment",
                        name: "{{$survey['questionId']}}",
                        title: "{{$survey['QuestionText']}}",
                        isRequired:true

                    },

                    @endif
                    @endforeach
                

            @endif
        

        ]//questions end

        }//questions end
    ]//pages end
};

window.survey = new Survey.Model(json);

survey.onComplete.add(function (result) {

ref = document.createElement("a");
var linkText = document.createTextNode("Back to Course");
ref.appendChild(linkText);
ref.href =document.referrer;
ref.title = "Back to course";

document
    .querySelector('#surveyResult')
    .appendChild(ref);







    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


    jQuery.ajax({
        url: "{{ route('InsertAnswer') }}",
        method: 'post',
        data: {data:result.data,surveyId:surveyId},

    success: function(result2){
        console.log(result2);

    },
    error:function(){
        alert("error");
    }
    
    
    });


});

$("#surveyElement").Survey({model: survey});


</script>
<style>
body {
background-color: #fff;
}
.my-rating {
font-size: 12px;
}


</style>


@endsection
