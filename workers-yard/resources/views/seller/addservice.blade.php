@extends('layouts.seller')
@section('content')

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
        <center><h1 class="my-3">Add Service</h1></center>

        <form action="{{route('shop.store')}}" method="POST" enctype="multipart/form-data">

            <div class="mb-3 mt-3">
            <label for="name" class="form-label">Title for Your Service:</label>
            <input type="text" class="form-control" id="servicename" placeholder="Enter Title" name="servicename">
            </div>

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Discribe about your service:</label>
                <textarea class="form-control" rows="5" id="comment" name="servicedescription"></textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Add Image for service:</label>
                <input type="file" class="form-control" id="servicename" name="image">
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Add a price for service:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>




@endsection
