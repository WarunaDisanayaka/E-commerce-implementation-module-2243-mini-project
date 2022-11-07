@extends('layouts.main')
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
        <center><h1 class="my-3">Edit Service</h1></center>

        <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Title for Your Service:</label>
                <input type="text" class="form-control" value="{{$service->servicename}}" id="servicename" placeholder="Enter Title" name="servicename">
            </div>

            <input type="hidden" name="shopid" value="{{$service->shopid}}">

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Discribe about your service:</label>
                <textarea class="form-control" rows="5" id="comment" name="servicedescription">{{$service->servicedescription}}</textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Add Image for service:</label>
                <img class="img-fluid" width="100px" src="{{asset('images/'.$service->serviceimage)}}" alt="New York">
                <input type="hidden" class="form-control" value="{{$service->serviceimage}}" id="servicename" name="image">
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Add a price for service:</label>
                <input type="text" class="form-control" value="{{$service->price}}" id="price" placeholder="Enter price" name="price">
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Add included services (separate with coma):</label>
                <textarea class="form-control" rows="5" id="servies" name="includeservice">{{$service->includeservice}}</textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Number of revisions (optional):</label>
                <input type="number" class="form-control" value="{{$service->revision}}" id="revisions" placeholder="Number of Revisions" name="revision">
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Dilivery Dates (optional):</label>
                <input type="number" class="form-control" value="{{$service->diliverydates}}" id="price" placeholder="Enter Diliver Dates" name="diliverydates">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>




@endsection
