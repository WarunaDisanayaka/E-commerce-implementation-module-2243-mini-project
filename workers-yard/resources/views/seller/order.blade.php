@extends('layouts.main')

@section('content')

    <div class="row">
        <h2 style="text-align: center;">All Orders</h2>
        <div class="col-sm-12">


                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>service Name</th>
                            <th>service Image</th>
                            <th>Custermer Name</th>
                            <th>Custermer Email</th>
                            <th>Order Date</th>
                            <th>Order Time</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($orders as $o)

                            <tr>
                                <td>{{$o->id}}</td>
                                <td>{{$o->servicename}}</td>
                                <td><img src="{{asset('images/'.$o->serviceimage)}}" alt="" width="100px"></td>
                                <td>{{$o->name}}</td>
                                <td>{{$o->email}}</td>
                                <td>{{$o->date}}</td>
                                <td>{{$o->time}}</td>
                                <td>
                                    <form action="{{ route('ordercom.store') }}" method="POST">
                                        @csrf
                                        <a class="btn btn-info" href="{{ route('order.show',$o->id) }}">Show</a>



                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-success">Confirm</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>


        </div>
    </div>



@endsection
