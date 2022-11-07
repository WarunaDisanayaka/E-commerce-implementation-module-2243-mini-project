@include('layouts.gigheader')


<style>
    .cont{
        margin-top: 100px;
    }

    .box{
        color: white;
        align-content: center;
        text-align: center;
    }

    .b{
        margin-left: 80%;
        
    }

   

</style>

{{-- <h1><i class="bi bi-1-circle"></i></h1>
<div class="cont">
    
<div class="container">
    <div class="row">
      


        <div class="col">
            <div class="row">
                <div class="col-xs-6 col-md-2"><h1>1</h1></div>
                <div class="col-xs-6 col-md-7 my-2"><h4>Location</h4></div>
                <div class="col-xs-6 col-md-3"><h1>N</h1></div>
              </div>
          </div>
     

      <div class="col">
        <div class="row">
            <div class="col-xs-6 col-md-2"><h1>2</h1></div>
            <div class="col-xs-6 col-md-7 my-2"><h4>Service</h4></div>
            <div class="col-xs-6 col-md-3"><h1>N</h1></div>
          </div>
      </div>
     

      <div class="col">
        <div class="row">
            <div class="col-xs-6 col-md-2"><h1>3</h1></div>
            <div class="col-xs-6 col-md-7 my-2"><h4>Date & Time</h4></div>
            <div class="col-xs-6 col-md-3"><h1>N</h1></div>
          </div>
      </div>
     

      <div class="col">
        <div class="row">
            <div class="col-xs-6 col-md-2"><h1>4</h1></div>
            <div class="col-xs-6 col-md-7 my-2"><h4>Information</h4></div>
            <div class="col-xs-6 col-md-3"><h1>N</h1></div>
          </div>
      </div>



      <div class="col">
        <div class="row">
            <div class="col-xs-6 col-md-2"><p><i class="fas fa-phone me-3 text-secondary"></i></p></div>
            <div class="col-xs-6 col-md-7 my-2"><h4>Confomation</h4></div>
            <div class="col-xs-6 col-md-3"><h1>N</h1></div>
          </div>
      </div>





    </div>
  </div>

</div> --}}



<div class="cont">

  <div class="row mx-5">

    
    <div class="col-sm-2 mx-2">
        <div class="box">
      <div class="card py-4 " style="background-color: #1CBF73">
        <div class="card-body">
          <h4 class="card-title">Your Location</h4>
          <p class="card-text">Sri lanaka North Western Kurunegala Sri lanka</p>
        </div>
      </div>
    </div>
</div>

   
    <div class="col-sm-2">
        <div class="card border-white">
          <div class="card-body my-5">
            <h6 class="card-title">Service Country</h6> 

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

          </div>
        </div>
      </div>

    <div class="col-sm-2">
        <div class="card border-white">
          <div class="card-body my-5">
            <h6 class="card-title">Service City</h6> 

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

          </div>
        </div>
      </div>

     
    <div class="col-sm-2">
        <div class="card border-white">
          <div class="card-body my-5">
            <h6 class="card-title">Service Area</h6> 

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>

          </div>
        </div>
      </div>
  </div>
<div class="b">
  <button type="button" class="btn text-light" style="background-color: #1CBF73">Next</button>
</div>
</div>





@include('layouts.footer')