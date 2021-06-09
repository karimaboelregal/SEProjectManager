@extends('layouts.student_topbar')
@section('content')

    

<link rel="stylesheet" href="{{ asset('css/bootstrap-material-design.min.css')}}" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />




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
    {
    type: "matrix",
    name: "Quality",
    title: "Please indicate if you agree or disagree with the following statements",
    columns: [
    {
        value: 1,
        text: "Strongly Disagree"
    }, 
    {
        value: 2,
        text: "Disagree"
    }, 
    {
        value: 3,
        text: "Neutral"
    }, 
    {
        value: 4,
        text: "Agree"
    }, 
    {
        value: 5,
        text: "Strongly Agree"
    }
    ],
    rows: [
    {
        value: "affordable",
        text: "Lecture was fully understandable"
    },
    {
        value: "does what it claims",
        text: "Scrum is the best agile method there is"
    },
    {
        value: "better then others",
        text: "The waterfall method is for large scale projects"
    },
    {
        value: "easy to use",
        text: "I will work with agile from now on"
    }
    ]
    }, 
    {
        type: "rating",
        name: "satisfaction",
        title: "How satisfied are you with the Product?",
        mininumRateDescription: "Not Satisfied",
        maximumRateDescription: "Completely satisfied"
    }, 
    {
        type: "rating",
        name: "recommend friends",
        title: "How likely are you to recomend agile later on",
        mininumRateDescription: "Will not recommend",
        maximumRateDescription: "I will recommend"
    }, 
    {
        type: "comment",
        name: "suggestions",
        title: "What would make you more satisfied with this lecture?"
    }
    ]
    }
]
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
