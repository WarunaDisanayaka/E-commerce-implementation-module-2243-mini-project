
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
        <link rel="stylesheet" href="{{asset('css/style.css')}}">


		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>



<div class="wrapper">

	  <div class="body-overlay"></div>

	 <!-------sidebar--design------------>

	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="" class="img-fluid"/><span>Workers Yard</span></h3>
		</div>
		<ul class="list-unstyled component m-0">

		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>

          <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">aspect_ratio</i>Layouts</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">apps</i>Widgets</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">equalizer</i>charts</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">extension</i>UI Element</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu4">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">border_color</i>forms</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu5">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">grid_on</i>tables</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu6">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="material-icons">content_copy</i>Pages</a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu7">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dashboard"><i class="material-icons">date_range</i>copy </a>
        </li>

        <li class="">
            <a href="#" class="dashboard"><i class="material-icons">library_books</i>calendar</a>
        </li>

		</ul>
	 </div>

     <!--Page content start-->
     <div id="content">

        <div class="top-navbar">
            <div class="xp-topbar">
                <div class="row">
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt</span>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form action="">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2">Go</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                                <ul class="nav navbar-nav flex-row ml-auto">
                                    <li class="dropdown nav-item active">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
                                            <span class="material-icons">notifications</span>
                                            <span class="notification">4</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">You Have 4 New Messages</a></li>
                                            <li><a href="">You Have 4 New Messages</a></li>
                                            <li><a href="">You Have 4 New Messages</a></li>
                                            <li><a href="">You Have 4 New Messages</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <span class="material-icons">question_answer</span>
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
                                           <img src="{{ asset('img/user.jpg') }}" alt="" style="width:40px; border-radius:50%;">
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <ul class="dropdown-menu small-menu">

                                            <li><a href="#"><span class="material-icons">person_outline</span>
                                                Profile
                                            </a></li>

                                            <li><a href="#"><span class="material-icons">settings</span>
                                                Settings
                                            </a></li>

                                            <li><a href="#"><span class="material-icons">logout</span>
                                                Logout
                                            </a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>

     </div>

</div>








     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>


  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });

		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });

	   });
  </script>





  </body>

  </html>


