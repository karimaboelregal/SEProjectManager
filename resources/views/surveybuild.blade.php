@extends('layouts.app')
@section('content')


<body>
    <div  class="container" style="margin-left:5px;">
        
            <h2 Style="margin:2%;">Survey Information</h2>

            <div class="row" style="margin-left:30px">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>
            </div>


            <h2>Questions</h2>
            <div id="questionsDiv">
                <div class = "questions" style = "margin-left:2%">

                    <h3>Question 1</h3>

                    <div class="row" style = "margin:5px;">
                        <label for="cars">choose question type:</label>

                        <select id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>

                    
                    </div>
                    <div class="row">
                        <div class = "col-1">
                            <label for="title">Question Text</label>
                        </div>
                        <div class = "col-3">
                            <input type="text" name="title" id="title">
                        </div>

                        <div class="col-7">
                            <button class="btn btn-danger" onclick="removeQuestion()">Remove Question</button>

                        </div>

                    </div>

                    
                </div>
            </div>


            <div class="row" style= "margin-top:5%">
                <button class="btn btn-danger" onclick="addQuestion()">Add Question</button>

            </div>

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
            string += '<label for="cars">choose question type:</label>';
            string += '<select id="cars">';
                string += '<option value="volvo">Volvo</option>';
                string += '<option value="saab">Saab</option>';
                string += '<option value="opel">Opel</option>';
                string += '<option value="audi">Audi</option>';
                string += '</select>';
            string += '</div>';
        string += '<div class="row">';
            string += '<div class="col-1">';
                string += '<label for="title">Question Text</label>';
                string += '</div>';
            string += '<div class="col-3">';
                string += '<input type="text" name="title" id="title">';
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

