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
    <section class="categories d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active categories-card">
                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>
                
              </div>

              <div class="carousel-item categories-card">
                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
                </div>

                <div class="cat-card">
                    <div class="cat-icon d-flex justify-content-center">
                        <box-icon type='solid' name='plug'></box-icon>
                    </div>
                    <div class="cat-title">
                        <h3>Electronics</h3>
                    </div>
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
