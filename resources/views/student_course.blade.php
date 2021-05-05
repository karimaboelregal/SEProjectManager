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

    <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#createTeamModal">Create Team</button>



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
                                            <td><button type="button" class="btn btn-danger">Invite</button></td>


                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>2018/05666</td>
                                            <td>python , ML</td>
                                            <td><button type="button" class="btn btn-danger">Invite</button></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>2018/05666</td>
                                            <td>python , ML</td>
                                            <td><button type="button" class="btn btn-danger">Invite</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>2018/05666</td>
                                            <td>python , ML</td>
                                            <td><button type="button" class="btn btn-danger">Invite</button></td>


                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>2018/05666</td>
                                            <td>python , ML</td>
                                            <td><button type="button" class="btn btn-danger">Invite</button></td>

                                        </tr>



                                        
                                    </tbody>
                                </table>

                                

                            </table>
                        </div>    
                    </div>
                    <div class="projectDetails" style="display:none;">

                        <form>
                            <div class="form-group">
                                <label for="title">Project Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter Title">
                            </div>
                           
                            
                            <div class="form-group">
                                <label for="description">Project Description</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="clientName"> Client Name</label>
                                <input type="text" class="form-control" id="clientName" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="clientNumber">Client Number</label>
                                <input type="text" class="form-control" id="clientNumber" placeholder="Enter Number">
                            </div>

                            <div class="form-group">
                                <label for="clientOrganization">Client organization</label>
                                <input type="text" class="form-control" id="clientOrganization" placeholder="Enter Organization">

                            </div>



                        </form>

                    </div>
                </div>

                <div class="modal-footer" >
                    <button type="button" class="btn btn-danger closeModal" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-danger previous" style="display:none;">Previous</button>
                    <button type="button" class="btn btn-danger submit" style="display:none;">Submit</button>


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


</script>

</body>
@endsection

