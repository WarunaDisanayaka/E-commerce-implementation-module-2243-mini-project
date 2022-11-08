@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-sm-12">

            <div class="table-responsive-sm">

                <table class="table">

                  <tr>
                    <center><h2>Order Detials</h2></center>
                  </tr>
                  <tr><br></tr>
                  <tr>
                    <th>Service Title</th>
                    <th>Service Image</th>
                  </tr>
                  <tr>
                    <td>{{$orders->servicename}}</td>
                    <td><img src="{{asset('images/'.$orders->serviceimage)}}" alt="" width="300px"></td>
                  </tr>
                  <tr><br></tr>
                  <tr>
                    <th>Custermer Name</th>
                    <th>Custermer Email</th>
                    <th>Custermer Phone Number</th>
                    <th>Custermer Address</th>
                  </tr>
                  <tr>
                    <td>{{$orders->name}}</td>
                    <td>{{$orders->email}}</td>
                    <td>{{$orders->tel}}</td>
                    <td>{{$orders->address}}</td>
                  </tr>
                  <tr><br></tr>
                  <tr>
                    <th>Order Description</th>
                  </tr>
                  <tr>
                    <td><td>{{$orders->orderdescription}}</td></td>
                  </tr>
                  <tr><br></tr>
                  <tr>
                    <th>Order Date</th>
                    <th>Order Time</th>
                  </tr>
                  <tr>
                    <td>{{$orders->date}}</td>
                    <td>{{$orders->time}}</td>
                  </tr>


                </table>
            </div>
            <br><br>
        </div>
    </div>

@endsection
