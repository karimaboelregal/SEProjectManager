<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>
    <style>

    .login {
        margin-top: 100px;
        width: 400px;
        height:350px;
        background: #FFFFFF;
        box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.30);
    }
    .loginHead {
        width:100%;
        height:40px;
        background: #C63E47;
    }
        .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
    }
    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
        text-align: center;
    }
    .inputDesign {
        border: 0px;
        border-bottom:none;
        background:linear-gradient(#C63E47,#C63E47) bottom no-repeat;
        background-size:50% 2px;
        
        font-family: "Times New Roman", Times, serif;
        font-size: 18px;
        transition: background-size 0.5s;
  }
    .inputDesign:focus {
        outline: none;
        background:linear-gradient(#C63E47,#C63E47) bottom no-repeat;
        background-size:100% 2px;

    }
.custom-control-label:before{
  background-color:#C63E47;
  outline: none;

}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before{
  background-color:#C63E47;
  outline: none;
}
.btn {
    border:1px solid #C63e47 !important;
  outline: none !important;
  box-shadow: none !important;

}
.btn:hover, .btn:hover {
  outline: none !important;
  box-shadow: none !important;
background-color:#C63E47 !important;
}    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#ffffff">
<nav class="navbar navbar-light" style="background-color: #525252;width:100%">
  <a class="navbar-brand text-light" href="#">Welcome</a>
</nav>
<main class="py-10">
    @yield('content')
</main>

</body>
</html>
