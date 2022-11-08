@extends('layouts.main')

@section('content')
<br><br>
    <div class="row">
        <div class="col-sm-6">
            <a href="{{route('service.edit', $service->id)}}" class="btn btn-primary" style="float: right;">Edit</a>
            <h2>{{$service->servicename}}</h2>

            <hr><br>
            <img class="img-fluid" src="{{asset('images/'.$service->serviceimage)}}" alt="New York">
            <hr>

            <p>Price is RS. {{$service->price}}</p>
            @php
                        $ser = json_decode($service->includeservice);
                        $count = 0;
                    @endphp
            <p>The Include services</p>
                <ul type="none">
                    @foreach ($ser as $in)
                        <li>{{$in}}</li>
                        @php
                            $count = $count+1;
                        @endphp
                    @endforeach
                </ul>
            <p>The Number of Revitions : {{$service->revision}}</p>
            <p>The dilivery Date is : {{$service->diliverydates}}</p>
        </div>

        <div class="col-sm-6" style="text-align: justify;">
            <h4>Discription of service</h4>
            <p>{{$service->servicedescription}}</p>
        </div>
    </div>

@endsection
