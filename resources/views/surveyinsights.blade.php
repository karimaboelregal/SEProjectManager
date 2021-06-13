@extends('layouts.app')
@section('content')
<!-- Load plotly.js into the DOM -->
<script src='https://cdn.plot.ly/plotly-2.0.0.min.js'></script>

<script>
    var element = document.getElementById("users");
    element.classList.add("show");

</script>

<h1 Style="margin-left:3%;margin-top:3%;">Survey Insights</h1>


    
    @foreach($surveys as $key => $survey)
        @if($survey["typename"] == "matrix")
            <h3 style = "margin-left:40px;">{{$survey['QuestionText']}}</h3>
            <div class="row"> 
                <div class="col-10" id='barchart{{$key}}'>
                    <!-- Plotly chart will be drawn inside this DIV -->
                </div>
            </div>
        @endif
    @endforeach
        

<div style="margin-top:30px;width:100% !important;margin-bottom:50px;" class="row d-flex justify-content-center ">
    
    <div class="datatable-wide">
        <table id="userTable" class="table table-striped dt-responsive nowrap " style="width:100%">
            <thead>
                <tr class="text-center" style="background-color: #C63E47; color:white;">
                    <th scope="col">QuestionName</th>
                    <th scope="col">Students Name</th>
                    <th scope="col">Answer</th>

                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($surveys as $survey)
                    @foreach($survey['answer'] as $answer)
                        <tr>                
                            <td class="align-middle">{{$survey['QuestionText']}}</td>
                            <td class="align-middle">{{$answer["Surname"]}}</td>
                            <td class="align-middle">{{$answer["Answer"]}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
<script>
    $.noConflict();
    jQuery(document).ready(function($) {
        $('#userTable').DataTable({
            columnDefs: [{
                orderable: false
                , targets: 2
            }]
            , responsive: true
            , "dom": '<"top" f>rt<"bottom"ip>'
            , buttons: [{
                className: "btn-dark"
            }]
        });
        $('#dtPluginExample_wrapper .col-md-7:eq(0)').addClass("d-flex justify-content-center justify-content-md-end");
        $('#dtPluginExample_paginate').addClass("mt-3 mt-md-2");
        $('#dtPluginExample_paginate ul.pagination').addClass("pagination-sm");

    })

</script>

<script>

<?php 
$countsquestions = array();
foreach($surveys as $survey)
{
    //$count = array_count_values(array_column($log, 1));
    $counts = array("stronglyAgree"=>0,"agree"=>0,"neutral"=>0,"disagree"=>0,"stronglyDisagree"=>0);
    if($survey["typename"] == "matrix"){
        foreach($survey['answer'] as $answer){
            if($answer['Answer'] == "1")
                $counts["stronglyDisagree"] += 1;
            else if($answer['Answer'] == "2")
                $counts['disagree'] += 1;
            else if($answer['Answer'] == "3")
                $counts['neutral'] += 1;
            else if($answer['Answer'] == "4")
                $counts["agree"] += 1;
            else if($answer['Answer'] == "5")
                $counts['stronglyAgree'] += 1;
            else
                echo "console.log('error');";

    }
        array_push($countsquestions, $counts);
    }
    



}
?>
{{$i = 0}}
@foreach($surveys as $key=>$survey)
@if($survey["typename"] == "matrix")
var data = [
{


x: ['strongly agree', 'agree', 'neutral','disagree','strongly disagree'],
y: [{{$countsquestions[$i]['stronglyAgree']}},{{$countsquestions[$i]['agree']}},
 {{$countsquestions[$i]['neutral']}},
 {{$countsquestions[$i]['disagree']}},
 {{$countsquestions[$i]['stronglyDisagree']}}],





type: 'bar'
}
];

    Plotly.newPlot('barchart{{$key}}', data);
    {{$i++}}
@endif
@endforeach


</script>




@endsection

