@extends('layouts.seller')
@section('content')


<center><h1 class="my-3">Add Service</h1></center>
<form class="my-5 mx-5" method="POST" action="{{route('service.store')}}">
  @csrf
    <div class="mb-3 ">
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter service name"> 
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