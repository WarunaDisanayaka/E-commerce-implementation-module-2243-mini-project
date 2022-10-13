@extends('layouts.seller')

@section('content')
<br><br>

    <div class="container-fluid">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
            <br>
            <div class="col-sm-12">

                <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">

                    <div class="mb-3 mt-3">
                      <label for="name" class="form-label">Shop Name:</label>
                      <input type="text" class="form-control" id="sname" placeholder="Enter Shop Name" name="sname">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="scatagory" class="form-label">Shop Catagory:</label>
                        <input type="text" class="form-control" id="scatagory" placeholder="Enter Shop catagory" name="scatagory">
                      </div>

                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label">Select the banner image:</label>
                        <input type="file" class="form-control" id="bimg" name="bimg">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="description" class="form-label">Shop Description:</label>
                        <textarea class="form-control" rows="5" id="sdis" name="sdis"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>

@endsection
