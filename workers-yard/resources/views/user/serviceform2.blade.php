@include('layouts.gigheader')


<style>
    .grid-container{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
        margin: 50px;

    }

    .grid-item-3{
        grid-row: span 5;
        margin-right: 100px;
        padding: 20px;
    }

    .grid-item-8{
        grid-column: span 2;
    }

    .grid-item-4{
        grid-column: span 2;
    }

    .con{
        margin-top: 100px;
       
    }

    .grid-item-11
    {
        grid-column: span 3;
    }


    .b{
        margin-left: 90%;
        
    }

    .c{
        margin-left: 70%;
    }

</style>

<!-- CSS -->
<link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

<!-- JavaScript -->
<script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<div class="con">

<div class="grid-container my-4 ">

    <div class="grid-item grid-item-1">
        {{-- <h1>a</h1> --}}
        <img class="rounded" src="{{asset('img/sample.png')}}" width="350" height="200" alt="sample">
        
    </div>



    <div class="grid-item grid-item-2">
        <h3>Moving Service From One Place to Another</h3>
        
    </div>
    
    
    <div class="grid-item grid-item-3 border rounded">
        <h3>Booking Summery</h3>
        <h6 class="my-4">Appointment Package Service</h6>
        <p class="text-secondary">5 Seater Sofa      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; X1    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $5.00</p>
        <p class="text-secondary">5 Seater Sofa      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; X1    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $5.00</p>
        <hr class="text-secondary">
        <p class="text-secondary">Package Fee      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $5.00</p>
        <h6>Extra Service</h6>
        <hr>
        <p class="text-secondary">Extra Service      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $0.00</p>
        <hr class="text-secondary">
        <p class="text-secondary">Subtotal      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $9.00</p>
        <hr class="text-secondary">
        <p class="text-secondary">Tax(+) 7 %      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    $0.00</p>
        <hr>
        <h5>Total</h5>
    </div>

    <div class="grid-item grid-item-4">
        <hr>
    </div>



    <div class="grid-item grid-item-6">
        <h3>What's Included</h3>
        <p>5 Seater Sofa</p>
        <p>3 Seater Sofa</p>
    </div>



    <div class="c">

    <div class="grid-item grid-item-7 mt-5">
        <a href="#">Remove</a><br>
        <a href="#">Remove</a>
    </div>
</div>

    <div class="grid-item grid-item-8">
        <h3>Upgrade your order with extras</h3>
    </div>

    <div class="grid-item grid-item-9">
        {{-- <h3>Upgrade your order with extras</h3> --}}

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('img/sample.png')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>



    <div class="grid-item grid-item-10 ">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('img/sample.png')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>







    <div class="grid-item grid-item-11">
        <h3>Benifits of the Package:</h3>
        <p class="my-3">Service Gurantee</p>
        <p class="my-3">Quality Service</p>
    </div>


    {{-- <div class="grid-item grid-item-12"><h1>i</h1></div>
    <div class="grid-item grid-item-12"><h1>j</h1></div> --}}
</div>


</div>


<div class="b">
    
    <a href="{{url('serviceform2')}}"><button type="button" class="btn text-light"  style="background-color: #1CBF73">Next</button></a>
  </div>









  

@include('layouts.footer')



{{-- 
nav start --}}





{{-- nav end --}}