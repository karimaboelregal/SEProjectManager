<html>
<head>
<script src="https://kit.fontawesome.com/df4285e61f.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('css/turningbutton.css') }}" rel="stylesheet">

</head>

<body>
  <div class="d-flex" id="wrapper">


    <div class="border-right" id="sidebar-wrapper">

      <div class="list-group list-group-flush" id="pc">
      
        <a id="home" href="/home" class="list-group-item list-group-item-action darkRed text-dark text" ><span class="text-nowrap"><i class="icons fa fa-home"></i></i> <h6>Home</h6></a></span>
        <a id="users" href="/users" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-users"></i> <h6>Users</h6></a></span>
        <a id="courses" href="/courses" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-copyright"></i> <h6>Courses</h6></a></span>
        <a id="projects" href="/projects" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-cog"></i> <h6>Projects</h6></a></span>

      </div>
    </div>
    @yield('content2')

</body>
</html>