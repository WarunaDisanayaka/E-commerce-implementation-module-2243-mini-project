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
                        <div class="col-sm-6">
                            <h1>{{$s->shopname}}</h1>
                        </div>
<<<<<<< Updated upstream
                        <div class="col-sm-6">
                            <h3 style="float: right">{{$s->shopcatagory}}</h3>
                        </div>
=======

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
>>>>>>> Stashed changes
                    </div>




                @endforeach

            @else

                <a href="{{route('shop.create')}}" class="btn btn-info">Create my shop</a>

            @endif

            </div>
        </div>


@endsection
