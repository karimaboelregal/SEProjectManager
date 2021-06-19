@extends('layouts.app')
@section('content')


<body>
    <div  class="container" style="margin-left:5px;">
        


            <h2 Style="margin:2%;">Survey Information</h2>
            <form action="{{route('InsertSurvey')}}" method="post">
                {{csrf_field()}}
                <input type = "hidden" id = "courseId" name = "courseId"value = "{{$courseId}}"">

            <div class="row" style="margin-left:30px">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" >
                </div>
            </div>


            <h2>Questions</h2>
            <div id="questionsDiv">
            
                <div class = "questions" style = "margin-left:2%">
                


                    
                    

                
                </div>
                <div class="row" style="margin:5%">
                    <button type="button" class="btn btn-danger" onclick="addQuestion()">Add Question</button>

                </div>

                

            </div>


            
            <input type="submit" value="add survey" class="btn btn-success">
            </form>

            
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            
            <li>Please type in the survey title and questions first</li>
            @endforeach
        </ul>
    </div>
    @endif


    </div>



</body>

<script>
count = 1;




function removeQuestion(id)
{
    $("#"+id).remove();
    
}




function addQuestion()
{
    
    

    string = '';
    string += '<div id="'+ count+ '">';
        string += '<h3>Question'+ count+'</h3>';
        string += '<div class="row" style="margin:5px;">';
            string += '<label for="type">choose question type:</label>';
            string += '<select id="type" name="type[]">';
                string += '<option value="" disabled selected>Choose option</option>';
                string += '<option value="1">Matrix</option>';
                string += '<option value="2">Rating</option>';
                string += '<option value="3">Text</option>';

                string += '</select>';
            string += '</div>';
        string += '<div class="row">';
            string += '<div class="col-1">';
                string += '<label for="title">Question Text</label>';
                string += '</div>';
            string += '<div class="col-3">';
                string += '<input type="text" name="questiontitle[]" id="questiontitle" required>';
                string += '</div>';
            string += '<div class="col-7">';
                string += '<button class="btn btn-danger" onclick="removeQuestion('+count+')">Remove Question</button>';
                string += '</div>';
            string += '</div>';
        string += '</div>';

    count++;
    $('#questionsDiv').append(string);
}



</script>

@endsection

