@extends('layouts.main')

@section('content')

    <div class="row">
        <h2 style="text-align: center;">All Orders</h2>
        <div class="col-sm-12">
            {{$orders[0]->id}}
        </div>
    </div>



@endsection
