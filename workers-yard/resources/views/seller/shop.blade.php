@extends('layouts.main')

@section('content')
<br><br>

    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <br><br>
        <div class="col-sm-12">

             @if ($shopcount > 0)
                @foreach ($shops as $s)

                    <div class="row">
                        <div class="col-sm-12">
                            <img class="img-fluid" src="{{asset('images/'.$s->bannerimage)}}" alt="">
                        </div>

                    </div>
                    <br>
                        <hr>
                    <div class="row">
                        <div class="col-sm-5" style="margin: 15px; border-right: 2px solid green;">
                            <div class="shop-d">
                                <h1>{{$s->shopname}}</h1>
                                <h5 style="float: right">Catagory :  {{$s->shopcatagory}}</h5>
                            </div>
                            <br>
                            <hr>

                            <form action="{{route('shop.destroy', $s->id)}}" method="POST">
                                <a href="{{route('shop.edit', $s->id)}}" class="btn btn-primary">Edit</a>

                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>


                        <div class="col-sm-6">
                            <p>{{$s->shopdescription}}</p>
                        </div>

                    </div>
                    <br><hr>

                   

                    <div class="row">

                        <a href="{{route('service.create')}}" class="btn btn-primary">Add Service</a>

                    </div>
                    <br><br>
                    <div class="row">
                        @foreach ($service as $se)
                            <div class="col-sm-4">
                                <img class="img-fluid" src="{{asset('images/'.$se->serviceimage)}}" alt="New York">
                                <hr>
                                <h3>{{$se->servicename}}</h3>
                                <br>
                                <br>
                                <form action="{{ route('service.destroy',$se->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('service.show',$se->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('service.edit',$se->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        @endforeach

                    </div>




                @endforeach

            @else

                <a href="{{route('shop.create')}}" class="btn btn-info">Create my shop</a>

            @endif

            </div>
        </div>

        <style>
            .shop-d{

            }
        </style>

<br><br>

@endsection
