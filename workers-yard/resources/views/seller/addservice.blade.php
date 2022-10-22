@extends('layouts.seller')
@section('content')


<center><h1 class="my-3">Add Service</h1></center>
<form class="my-5 mx-5">
    <div class="mb-3 ">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service name"> 
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price"> 
      </div>
      <div class="input-group">
        <span class="input-group-text">Service Description</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>

    <button type="submit" class="btn btn-primary my-3">Submit</button>
  </form>



@endsection