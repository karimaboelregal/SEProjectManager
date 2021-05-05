@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("courses");
    element.classList.add("show");
</script>

<body>
    <div class= "container">
    @foreach($course as $c)
        <h2 Style="margin-top:5%;" >Welcome to {{$c->Name}}</h2>

        <h4 Style="margin-top:5%;">Course Description</h4>

        <p>{{$c->Description}}.</p>

        <h4 Style="margin-top:5%;">Reading material</h4>

        <a href="#">News from the cloude</a>
        <br>
        <a href="#">The Agile manifesto</a>

        <h4 Style="margin-top:5%;">Lecture Survey</h4>

        <a href="#">Lecture 1 intro</a>
        <br>
        <a href="#">Lecture 2 The process</a>

    @endforeach
    <div class = "row">

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark" onclick="location.href = 'student_project'">Project</button>

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Create Team</button>
    </div>




    </div>

</body>
@endsection
