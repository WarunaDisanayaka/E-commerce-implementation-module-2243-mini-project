<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="https://kit.fontawesome.com/1100fac4c2.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!--OWL Carousel CSS CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Link CSS-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Welcome to Workers Yard</title>
  </head>
  <body>

<!--Navigation Menu-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light ">
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
            <li class="nav-item dropdown user-account">
                @if (Route::has('login'))
                <a href="#" class="nav-link dropdown-toggle m-2 menu-item" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acc</a>
                <box-icon name='user' class="user-icon" color="#ffffff"></box-icon>

                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dropdown-item" style="color: black;">Dashboard</a>
                    @else

                        <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endif

                @endauth

                  </ul>
            @endif

            </li>
        </ul>
    </div>

</nav>
<!-- End Of Navigation -->

