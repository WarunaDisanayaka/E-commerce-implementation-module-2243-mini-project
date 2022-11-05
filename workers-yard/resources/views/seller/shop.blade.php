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
                        <div class="col-sm-6">
                            <h3 style="float: right">{{$s->shopcatagory}}</h3>
                        </div>
                    </div>




                @endforeach

            @else

                <a href="{{route('shop.create')}}" class="btn btn-info">Create my shop</a>

            @endif

            </div>
        </div>


@endsection
