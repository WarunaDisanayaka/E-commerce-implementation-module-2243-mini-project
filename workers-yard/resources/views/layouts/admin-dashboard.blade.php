
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Admin dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	    <!----css3---->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
        <div class="body-overlay">
            <!--Side bar-->
            <nav class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <h3></h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="" class="dashboard"><i class="material-icons">dashboard</i><span>dashboard</span></a>
                    </li>

                    <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"></a>
                            <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                <li><a href="#">You have 5 new messages</a></li>
                                <li><a href="#">You have 5 new messages</a></li>
                                <li><a href="#">You have 5 new messages</a></li>
                                <li><a href="#">You have 5 new messages</a></li>
                            </ul>
                        </li>

                        <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                        </li>

                        <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">person</i><span>user</span></a>
                        </li>

                        <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                        </li>
                    </div>

                    <li class="dropdown">
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">aspect_ratio</i><span>Layouts</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu1">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">apps</i><span>widgets</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu2">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">equilizer</i><span>chart</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu3">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">extension</i><span>ui element</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu4">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">border_color</i><span>form</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu5">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">grid_on</i><span>table</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu6">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="material-icons">content_copy</i><span>pages</span>
                            <ul class="collapse list-unstyled menu" id="#pageSubmenu7">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                    </li>

                    <li class="">
                        <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                    </li>

                    <li class="">
                        <a href="#"><i class="material-icons">library_books</i><span>calender</span></a>
                    </li>

                </ul>
            </nav>

            <!--Page Content-->
            <div id="content">
                <!--Top navbar-->
                <div class="top-navbar">
                    <nav class="navbar navbar-expand-lg">
                        <button type="button" id="sidebar-collapse" class="d-xl-block d-lg-block d-md-none d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#">Dashboard</a>
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                        data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarcollapse">
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item dropdown active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notifications">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Yo have 4 new messages</a>
                                        </li>

                                        <li>
                                            <a href="#">Yo have 4 new messages</a>
                                        </li>

                                        <li>
                                            <a href="#">Yo have 4 new messages</a>
                                        </li>

                                        <li>
                                            <a href="#">Yo have 4 new messages</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><span class="material-icons">apps</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><span class="material-icons">person</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><span class="material-icons">settings</span></a>
                                </li>

                            </ul>
                        </div>

                    </nav>
                </div>

                 <!--Main Content-->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">equilizer</span>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="category"><strong>Visits</strong></p>
                                    <h3 class="card-title">70,340</h3>
                                </div>

                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="#">See detailed report</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">shopping_cart</span>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="category"><strong>Orders</strong></p>
                                    <h3 class="card-title">102</h3>
                                </div>

                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">local_offer</i>
                                        <a href="#">See detailed report</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>




        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>

   <script type="text/javascript">
    $(document).ready(function () {
              $('#sidebarCollapse').on('click', function () {
                  $('#sidebar').toggleClass('active');
                  $('#content').toggleClass('active');
              });

               $('.more-button,.body-overlay').on('click', function () {
                  $('#sidebar,.body-overlay').toggleClass('show-nav');
              });

          });

  </script>

  </body>

  </html>

