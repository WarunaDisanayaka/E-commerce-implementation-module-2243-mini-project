@extends('layouts.main')

@section('content')
<section class="stats mt-4">
    <div class="contianer-fluid">
        <div class="row g-6 mb-6">
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Toatal Mount to Pay</span>
                                <span class="h3 font-bold mb-0">$750.90</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                <i class="bi bi-arrow-up me-1"></i>13%
                            </span>
                            <span class="text-nowrap text-xs text-muted">Since last month</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Placed Jobs</span>
                                <span class="h3 font-bold mb-0">{{$ocount}}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <span class="badge badge-pill bg-soft-success text-success me-2">
                                <i class="bi bi-arrow-up me-1"></i>30%
                            </span>
                            <span class="text-nowrap text-xs text-muted">Since last month</span>
                        </div>
                    </div>
                </div>
            </div>
          
        
        </div>
    </div>
</section>


<section class="orders">

    <div class="row">
        <h2>Order List</h2>
        <br><br>
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Order ID</th>
                        <th>User Name</th>
                        <th>Order description</th>
                        <th>Order Date</th>
                        {{-- <th>Order Time</th> --}}
                        <th></th>
                    </tr>

                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->serviceid}}</td>
                            <td>{{$order->userid}}</td>
                            <td>{{$order->orderdescription}}</td>
                            <td>{{$order->created_at}}</td>
                            {{-- <td>{{$order->time}}</td> --}}
                            <td><button type="button" class="btn btn-success">Pay</button></td>

                        </tr>
                    @endforeach


                </table>
              </div>
        </div>
    </div>

</section>

@endsection

