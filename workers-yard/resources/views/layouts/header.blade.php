<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!--Link CSS-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    



    <title>Welcome to Workers Yard</title>
  </head>
  <body>

<!--Navigation Menu-->
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block">
            <!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block logo" href="#">Workers Yard</a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="//placehold.it/40?text=LOGO" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item nav-active">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Service List</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Price Plan</a>
            </li>
            <li class="nav-item user-account">
                <a href="#" class="nav-link m-2 menu-item" data-toggle="modal" data-target="#basicExampleModal">Acc</a>
                <box-icon name='user' class="user-icon"></box-icon>
            </li>
        </ul>
    </div>
</nav>
<!-- End Of Navigation -->
