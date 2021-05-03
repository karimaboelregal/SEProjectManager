@extends('layouts.student_sidebar')
@extends('layouts.app')
@section('content2')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>

<body>
<style>
/* projects tab */

/* Rectangle 5 */
.circle{
    
    
    right: 28.19%;
    

    background: #C63E47;
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 60px;
}

</style>

<div class ="container">


<div class="row">
    <div class="col">
        <button style="margin-top: 10px; width:150px; " type="button" class="btn btn-outline-dark">Suggestions</button>

    </div>
    <div class="col">
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Discussion</button>

    </div>
    <div class="col">
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Open</button>

    </div>


</div>


</div>

</body>
@endsection

