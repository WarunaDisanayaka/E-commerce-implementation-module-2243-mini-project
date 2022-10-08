@extends('layouts.seller')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                @if ($shopcount > 0)
                    hshop desplay
                @else
                    <a href="{{route('shop.create')}}" class="btn btn-info">Create my shop</a>
                @endif

            </div>
        </div>
    </div>

@endsection
