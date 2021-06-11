@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("teams");
    element.classList.add("show");

</script>
<div class="container">
   


    <div style="margin-top:30px; margin-left: 60px;" class="row">
    <div class="col-12 col-md-auto">
    <div style="margin-top:30px;" class="row">
        <button style="padding:5px; width: 150px;" type="button" class="btn btn-outline-dark invitation" data-toggle="modal" data-target="#createTeamModal">invitations</button>


 

    </div>
    </div>

        <table class="table">
            <thead>
                <tr class="text-center" style="background-color: #C63E47; color:white;">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col"><i class="fa fa-mouse-pointer"></i></i></th>
                </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($teams as $team)
                <tr>
                    <td class="align-middle">{{$team->id}}</td>
                    <td class="align-middle" ><a href="student_project">{{$team->teamName}}</a></td>
                    <td class="align-middle">{{$team->Name}}</td>
                    <td class="align-middle"> 
                        <button type="button" class="btn btn-outline-dark view" data-toggle="modal" data-target="#viewTeamModal">view</button>         
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin-top:30px; margin-left: 60px;" class="row text-center">

    </div>
</div>


    <!--team invitations -->
    <!-- Modal -->
    <div class="modal modal-createTeam fade" id="createTeamModal" tabindex="-1" role="dialog" aria-labelledby="createTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;">

                    <h5 class="modal-title" id="createTeamModalLabel">Team Invitations</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body my-custom-scrollbar">


                    <input type="text" class="inputDesign" name="Search" placeholder=" Live Search"><button style="margin-left:5px;" class="btn btn-outline"><i class="fa fa-search"></i></button>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>2018/01447</td>
                                        <td>c++, embedded systems</td>
                                        <td><button type="button" class="btn btn-danger">Accept</button></td>


                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>2018/05666</td>
                                        <td>python , ML</td>
                                        <td><button type="button" class="btn btn-danger">Accept</button></td>

                                    </tr>
                                </tbody>
                            </table>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger closeModal" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger submit" style="display:none;">Submit</button>
                    </div>
                </div>



            </div>
        </div>

    </div>
        <!-- modal ended -->

    <!--view Team -->
    <!-- Modal -->
    <div class="modal modal-createTeam fade" id="viewTeamModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;">

                    <h5 class="modal-title" id="viewTeamModalLabel">View Team</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body my-custom-scrollbar">


                    <input type="text" class="inputDesign" name="Search" placeholder=" Live Search"><button style="margin-left:5px;" class="btn btn-outline"><i class="fa fa-search"></i></button>
                    <div class="table-wrapper-scroll-y ">


                        <table>
                            <table class="table table-bordered table-striped mb-0">

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">prefrences</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>2018/01447</td>
                                        <td>c++, embedded systems</td>
                                        


                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>2018/05666</td>
                                        <td>python , ML</td>
                                        

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>2018/05666</td>
                                        <td>python , ML</td>


                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>2018/05666</td>
                                        <td>python , ML</td>


                                    </tr>







                                </tbody>
                            </table>



                        </table>



                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger closeModal" data-dismiss="modal">Close</button>


                        <button type="button" class="btn btn-danger submit" style="display:none;">Submit</button>



                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- modal ended -->







<script>
$(function(){
   
   



});
</script>

@endsection

