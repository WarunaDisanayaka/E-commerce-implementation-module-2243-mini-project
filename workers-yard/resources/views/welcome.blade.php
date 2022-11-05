@include('layouts.header')

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
                    <h4 class="font-weight-bold">Electronic</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="card-body" id="card2">
                    <div class="icon">
                        <i class="fa-solid fa-broom"></i>
                    </div>
                    <h4 class="font-weight-bold">Electronic</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="card-body" id="card3">
                    <div class="icon">
                        <i class="fa-solid fa-paint-roller"></i>
                    </div>
                    <h4 class="font-weight-bold">Electronic</h4>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-3">
                  <div class="card-body" id="card4">
                      <div class="icon">
                        <i class="fa-solid fa-house-chimney"></i>
                      </div>
                      <h4 class="font-weight-bold">Electronic</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="card-body" id="card5">
                      <div class="icon">
                        <i class="fa-sharp fa-solid fa-closed-captioning"></i>
                      </div>
                      <h4 class="font-weight-bold">Electronic</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="card-body" id="card6">
                      <div class="icon">
                        <i class="fa-solid fa-scissors"></i>
                      </div>
                      <h4 class="font-weight-bold">Electronic</h4>
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
            <div class="col-4">
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
            </div>

        </div>


    </section>



    <!--OWL Carousel CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


  </body>
</html>
