@extends('layouts.seller')

@section('content')
<br><br>
    <div class="container">
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
                        {{$s->shopname}}
                    @endforeach
                @else
                    <a href="{{route('shop.create')}}" class="btn btn-info">Create my shop</a>
                @endif

            </div>
        </div>
    </div>

@endsection
