@extends('layouts.main')
@section('content')


<<<<<<< Updated upstream
<center><h1 class="my-3">Add Service</h1></center>
<form class="my-5 mx-5" method="POST" action="{{route('service.store')}}">
  @csrf
    <div class="mb-3 ">
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter service name"> 
=======
        <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
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

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Add included services (separate with coma):</label>
                <textarea class="form-control" rows="5" id="servies" name="includeservice"></textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Number of revisions (optional):</label>
                <input type="number" class="form-control" id="revisions" placeholder="Number of Revisions" name="revisions">
            </div>

            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Dilivery Dates (optional):</label>
                <input type="number" class="form-control" id="price" placeholder="Enter Diliver Dates" name="diliverydates">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
>>>>>>> Stashed changes
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" name="price" id="price" aria-describedby="emailHelp" placeholder="Price"> 
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Service Image</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="input-group">
        <span class="input-group-text">Service Description</span>
        <textarea class="form-control" name="discription" rows="5" aria-label="With textarea"></textarea>
      </div>

    <button type="submit" class="btn btn-primary my-3">Submit</button>
  </form>



@endsection