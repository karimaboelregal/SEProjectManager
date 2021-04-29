<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

</head>

<body>
  <div class="d-flex" id="wrapper">


    <div class="border-right" id="sidebar-wrapper">

      <div class="list-group list-group-flush">
        <a id="home" href="/home" class="list-group-item list-group-item-action darkRed text-dark text" ><span class="text-nowrap"><i class="icons fa fa-home"></i></i> Home</a></span>
        <a id="users" href="/users" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-users"></i> Users</a></span>
        <a id="courses" href="/courses" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-copyright"></i> Courses</a></span>
        <a id="projects" href="/projects" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-cog"></i> Projects</a></span>

      </div>
    </div>
    <main class="py-10">
    @yield('content2')
</main>

</body>
</html>