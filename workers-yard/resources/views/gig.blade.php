@include('layouts.gigheader')

<!--Gig breadcrum-->
<section class="gig-breadcrum">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="title">
                    <h5>Home | Service List</h5>
                </div>
                <div class="gig-title">
                    <h3>{{$service->servicename}}</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Single Gig-->

<section class="gig-description mt-5">
    <div class="container">
        <div class="row">
            <div class="col gig-details">
                <div class="gig-img">
                    <img src="{{ asset('images/'.$service->serviceimage) }}" alt="" srcset="">
                </div>
                <div class="seller-data mt-3">
                    <img src="{{ asset('img/seller-img.jpg') }}" class="img-thumbnail rounded-circle" alt="" srcset="">
                    <h5 class="seller-name mt-3">{{$seller->name}}</h5>
                </div>
                <div class="gig-tab mt-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">About Seller</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <p>{{$service->servicedescription}}</p>
                           <div class="title-list">
                             <h4>What you will get</h4>
                             <ul>
                                @php
                                    $inc = json_decode($service->includeservice);
                                @endphp
                                @foreach ($inc as $i)
                                    <li>{{$i}}</li>
                                @endforeach
                             </ul>
                           </div>

                           <div class="title-list">
                            <h4>Benefits of the premium Package:</h4>
                            <ul>
                               <li>fdl</li>
                               <li>fsd</li>
                            </ul>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                      </div>
                </div>
            </div>
            <div class="col gig-package">
                <div class="container package">
                    <div class="row">
                        <div class="package-name">
                            <h4>Package</h4>
                            <h4>25.00$</h4>
                        </div>
                        <div class="package-details">
                            <h6>Availabe Service Packages</h6>
                            <ul>
                                <li>One</li>
                                <li>Two</li>
                            </ul>
                        </div>
                        <div class="book-btn">
                            <button class="btn">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
