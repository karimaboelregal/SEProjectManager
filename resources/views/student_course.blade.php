@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>
<style>
.my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>

<body>
    <div class= "container">
    @foreach($courseInfo['courseObj'] as $course)
    <input type="hidden" id="courseid" name="courseid" value="{{$course->id}}">
        <h2 Style="margin-top:5%;" >Welcome to SE</h2>

        <h4 Style="margin-top:5%;">Course Description</h4>

        <p>{{$course->Description}}</p>

        <h4 Style="margin-top:5%;">Reading material</h4>

        <a href="#">News from the cloude</a>
        <br>
        <a href="#">The Agile manifesto</a>
    
        <h4 Style="margin-top:5%;">Surveys</h4>
        @foreach($courseInfo['surveysObj'] as $surveys)
                <a href="{{route('ViewSurvey',['id'=>$surveys->id])}}">{{$surveys->SurveyName}}</a>
                <br>
        @endforeach


    <div class = "row">

    

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#createTeamModal">Create Team</button>

    @endforeach

    


    </div>

    </div>

    <!-- create team modal -->
    <!-- Modal -->
    <div class="modal modal-createTeam fade" id="createTeamModal" tabindex="-1" role="dialog" aria-labelledby="createTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;">

                    <h5 class="modal-title" id="createTeamModalLabel">Create Team</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body my-custom-scrollbar">

                    <div class = "createTeam">
                        <input type="text" class="inputDesign" name="Search" placeholder="Search"><button style="margin-left:5px;" class="btn btn-outline"><i class="fa fa-search"></i></button>
                        <div class="table-wrapper-scroll-y ">


                            <table>
                                <table class="table table-bordered table-striped mb-0">

                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">prefrences</th>
                                            <th scope="col">Invite</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <form action="{{route('InviteStudent')}}" method="post">
                                        {{csrf_field()}}
                                        <?php $i=1;?>@foreach ($invite_students as $team_invitation)
                                        <tr>
                                        <input type="hidden" name="userId" value="{{$team_invitation->userId}}">
                                        <th scope="row"><?php echo $i;?></th>
                                        <td>{{$team_invitation->Surname}}</td>
                                        <td>{{$team_invitation->UniversityId}}</td>
                                        <td>{{$team_invitation->Preference}}</td>
                                        <td><button class="btn btn-outline" type="submit" value="submit">Invite</button>
                                        </td>
                                        </tr> 
                                        <?php $i++;?>
                                        @endforeach 
                                    </form>
                                    </tbody>
                                </table>

                                

                            </table>
                        </div>    
                    </div>
                    <div class="projectDetails" style="display:none;">

                        <form action="{{route('CreateTeam')}}" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                            <input type="hidden" name="courseid2" id="courseid2" value="">
                                <label for="title">Team Name</label>
                                <input type="text" name="TeamName" class="form-control" id="TeamName" placeholder="Enter Name">
                            </div>
                    </div>
                </div>

                <div class="modal-footer" >
                    <button type="button" class="btn btn-danger closeModal" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-danger previous" style="display:none;">Previous</button>
                    <button class="btn btn-danger submit" type="submit" style="display:none;" value="submit">Submit</button>

                    </form>
                    <button type="button" class="btn btn-danger next">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal ended -->




<script>
    $(".next").click(function(){

        $(".closeModal").toggle();
        $(".previous").toggle();
        $(".next").toggle();
        $(".submit").toggle();

        $(".createTeam").slideToggle();
        $(".projectDetails").fadeToggle();
    });
    $(".previous").click(function(){
        $(".closeModal").toggle();
        $(".previous").toggle();
        $(".next").toggle();
        $(".submit").toggle();
        
        $(".projectDetails").fadeToggle();
        $(".createTeam").slideToggle();


    });

    $(document).ready(function() {
        $("#courseid2").val($("#courseid").val());
    });

</script>

</body>
@endsection

