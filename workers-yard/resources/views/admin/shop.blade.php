@extends('layouts.main')

@section('content')

    <div class="row">
        <h2>All the shops which the sellers are created.</h2>
        <br><br>
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <tr>
                        <th>Shop Name</th>
                        <th>Seller Name</th>
                        <th>Seller email</th>
                        <th>Seller Phone Number</th>
                        <th>Catagory</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($shops as $s)
                        <tr>
                            <td>{{$s->shopname}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->tel}}</td>
                            <td>{{$s->shopcatagory}}</td>
                            <td>
                                <form action="{{route('adminshop.destroy', $s->id)}}" method="POST">

                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </table>
              </div>
        </div>
    </div>

@endsection
