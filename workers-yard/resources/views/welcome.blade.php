@include('layouts.header')

<!--Banner Image-->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="line">
    </div>
    <div class="container titles">
        <div class="row">
            <div class="d-flex justify-content-center title-one">
                <h5>Order any service, anytime from anywhere</h5>
            </div>
            <div class="d-flex justify-content-center title-two">
                <h1>ONE-STOP SOLUTION <br> FOR YOUR SERVICES</h1>
            </div>
        </div>
        <div class="row">
            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">

                  <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                    <button class="btn btn-primary">Search</button>
                  </div>

                </div>

              </div>
        </div>
    </div>
</div>



    <!--Browse Categories Title-->
    <div class="container browse-categories">
        <div class="row">
            <h2 class="text-center main-title">Browse <span class="second-title">Categories</span></h2>
        </div>
        <div class="row">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad,
                obcaecati aspernatur harum non dolore libero alias dicta nostrum fugiat recusandae iusto laborum,
                 iste reprehenderit? Accusamus laudantium enim incidunt deserunt quibusdam!</p>
        </div>
    </div>

    <!--Browse Categories Cards-->
    <section class="categories">
        <div class="container">
            <div class="row">
              <div class="col-3">
                <div class="card-body" id="card1">
                    <div class="icon">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <h4 class="font-weight-bold">Electronics</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="card-body" id="card2">
                    <div class="icon">
                        <i class="fa-solid fa-broom"></i>
                    </div>
                    <h4 class="font-weight-bold">Cleaning</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="card-body" id="card3">
                    <div class="icon">
                        <i class="fa-solid fa-paint-roller"></i>
                    </div>
                    <h4 class="font-weight-bold">Painting</h4>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-3">
                  <div class="card-body" id="card4">
                      <div class="icon">
                        <i class="fa-solid fa-house-chimney"></i>
                      </div>
                      <h4 class="font-weight-bold">House moving</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="card-body" id="card5">
                      <div class="icon">
                        <i class="fa-sharp fa-solid fa-closed-captioning"></i>
                      </div>
                      <h4 class="font-weight-bold">Digital</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="card-body" id="card6">
                      <div class="icon">
                        <i class="fa-solid fa-scissors"></i>
                      </div>
                      <h4 class="font-weight-bold">Saloon</h4>
                  </div>
                </div>
              </div>
          </div>
    </section>


    <!--Featured Service Section-->
    <div class="container gig">
        <div class="row">
            <h2 class="text-center main-title">Featured <span class="second-title">Services</span></h2>
        </div>
        <div class="row">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad,
                obcaecati aspernatur harum non dolore libero alias dicta nostrum fugiat recusandae iusto laborum,
                 iste reprehenderit? Accusamus laudantium enim incidunt deserunt quibusdam!</p>
        </div>
    </div>

    <section class="container featured-service">
        <div class="row">


            @foreach ($service as $s)
                <div class="col-4">
                    <div class="card" style="width: 349px;">
                        <img src="{{ asset('images/'.$s->serviceimage) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$s->servicename}}</h5>
                        <p class="card-text"></p>
                        <button class="btn btn-primary"><a href="{{route('front.show',$s->id)}}">Book Now</a></button>

                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-4">
                <div class="card" style="width: 349px;">
                    <img src="{{ asset('img/gigimg1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary">Book Now</button>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 349px;">
                    <img src="{{ asset('img/gigimg1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary">Book Now</button>
                    </div>
                  </div>
            </div> --}}

        </div>

    </section>

@include('layouts.footer')





  </body>
</html>
