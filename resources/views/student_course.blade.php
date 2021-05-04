@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>

<body>
    <div class= "container">
        <h2 Style="margin-top:5%;" >Welcome to SE</h2>

        <h4 Style="margin-top:5%;">Course Description</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel iaculis nisi. Praesent in commodo est. Integer ipsum dui, tempus quis velit vitae, congue tincidunt neque. Cras dictum arcu risus, vel ornare turpis sollicitudin scelerisque. Duis euismod ultrices placerat. Nunc laoreet nulla purus, at sollicitudin sapien mollis nec. Pellentesque nec rhoncus massa. Duis ultrices, libero tempus consequat iaculis, ipsum tortor tempus metus, volutpat ultricies nisi libero non magna.</p>

        <h4 Style="margin-top:5%;">Reading material</h4>

        <a href="#">News from the cloude</a>
        <br>
        <a href="#">The Agile manifesto</a>

        <h4 Style="margin-top:5%;">Lecture Survey</h4>

        <a href="#">Lecture 1 intro</a>
        <br>
        <a href="#">Lecture 2 The process</a>


    <div class = "row">

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark" onclick="location.href = 'student_project'">Project</button>

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Create Team</button>
    </div>




    </div>

</body>
@endsection

