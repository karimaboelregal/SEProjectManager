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

                <a id="home" href="/student_home" class="list-group-item list-group-item-action darkRed text-dark text"><span class="text-nowrap"><i class="icons fa fa-home"></i></i>
                        <h6>Home</h6></a></span>
                
                

            </div>
        </div>
        <div class>
            <main class="py-10">
                @yield('content2')
            </main>

</body>
</html>
