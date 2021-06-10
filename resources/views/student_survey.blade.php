@extends('layouts.student_topbar')
@section('content')

    

<link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css')}}" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />

<h2 Style="margin-top:5%;"></h2>

{{getType(array_search("matrix",array_column($surveyObj,'typeName'),true))}}



<style>

    .radio label input[type=radio]:checked~.bmd-radio:before,
    label.radio-inline input[type=radio]:checked~.bmd-radio:before {
    background-color: #C63E47;

    transform: scale3d(.5,.5,1);
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
    survey =  @json($surveyObj) ;
    console.log(survey);

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
                        title: "{{$survey['QuestionText']}}"
                    },

                    @endif
                    @endforeach
                

            @endif
        

        ]//questions end

        }//questions end
    ]//pages end
};

window.survey = new Survey.Model(json);

survey
.onComplete
.add(function (result) {
document
.querySelector('#surveyResult')
.textContent = "Result JSON:\n" + JSON.stringify(result.data, null, 3);
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
