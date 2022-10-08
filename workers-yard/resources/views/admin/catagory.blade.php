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
            <br>
            <div class="col-sm-12">
                <div class="pull-right">
                    <a href="{{route('catagory.create')}}" class="btn btn-primary">Create Category</a>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                      <tr>
                        <th>#</th>
                        <th>Catagory Name</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($catagories as $c)
                      <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->catagory}}</td>
                        <td></td>
                      </tr>

                        @endforeach
                    </table>
                  </div>
            </div>
        </div>
    </div>

@endsection
