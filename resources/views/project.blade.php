@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("projects");
    element.classList.add("show");
</script>

<body>
    <div class= "container">
    @foreach($project as $p)
        <h2 Style="margin-top:5%;" >Welcome to {{$p->ProjectTitle}}</h2>

        <h4 Style="margin-top:5%;">Project Description</h4>

        <p>{{$p->ProjectDesc}}.</p>

        <h4 Style="margin-top:5%;">Client info:</h4>

        <p><b>Client Name : </b>{{$p->ClientName}}.</p>

        <p><b>Client number : </b>{{$p->ClientNumber}}.</p>

        <p><b>Client Email : </b>{{$p->ClientEmail}}.</p>

        <h4 Style="margin-top:5%;">Team info:</h4>

        <p><b>Team members : </b>{{$p->ClientName}}.</p>

        <p><b>Team number : </b>{{$p->ClientName}}.</p>

        <h4 Style="margin-top:5%;">Course info:</h4>
        
        <p><b>Course name : </b>{{$p->ClientName}}.</p>

    @endforeach

    </div>

</body>
@endsection

