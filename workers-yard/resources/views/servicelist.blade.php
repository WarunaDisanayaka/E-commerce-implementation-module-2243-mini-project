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
                    <h3>Service List</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Single Gig-->



<section class="container featured-service">
    <div class="row">
        @foreach ($service as $s)
            <div class="col-4 mt-3">
                <div class="card" style="width: 349px;">
                    <img src="{{ asset('images/'.$s->serviceimage) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$s->servicename}}</h5>
                    <p class="card-text"></p>
                    <button class="btn btn-primary"><a href="{{ url('gig',$s->id) }}">Book Now</a></button>

                    </div>
                </div>
            </div>
        @endforeach




@include('layouts.footer')