@extends('layouts.app')
@section('content')


<body>
    <div class="container" style="margin-left:5px;">

        <h2 Style="margin:2%;">Survey Information</h2>

        <div class="row" style="margin-left:30px">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
        </div>


        <h2>Questions</h2>
        <div class = "questions" style = "margin-left:2%">
            <h3>Question 1</h3>
            <div class="row">
                <div class = "col-1">
                    <label for="title">Question Text</label>
                </div>
                <div class = "col-3">
                    <input type="text" name="title" id="title">
                </div>

                <div class="col-7">
                    <button class="btn btn-danger">Remove Question</button>
                </div>

            </div>

            
        </div>

        <div class="row" style= "margin-top:5%">
            <button class="btn btn-danger">Add Question</button>
        </div>


    </div>


</body>

@endsection

