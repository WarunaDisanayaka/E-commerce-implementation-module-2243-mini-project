@extends('layouts.seller')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{route('catagory.store')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="name" class="form-label">Catagory:</label>
                      <input type="text" class="form-control" id="catagory" placeholder="Enter Catagory" name="catagory">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

@endsection
