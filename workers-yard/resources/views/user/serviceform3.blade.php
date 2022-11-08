@include('layouts.gigheader')


<style>
    .con{
        margin: 70px;
    }

    .b{
        margin-left: 80%;

    }

</style>



<div class="con">

    <h2 class="my-5">Booking Information</h2>

<form action="{{route('order.store')}}" method="POST">
    @csrf
    <div class="mb-3">

            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Your Nme *</label>
                <input type="text" class="form-control" value="{{Auth::user()->name}}" placeholder="Saman" name="name">
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Your Email *</label>
                <input type="email" class="form-control" value="{{Auth::user()->email}}" placeholder="example@gmail.com" name="pswd">
              </div>
            </div>


    </div>


    <div class="mb-3">

        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1" class="form-label">Phone Number *</label>
            <input type="number" class="form-control" value="{{Auth::user()->tel}}" placeholder="076 XXXXXXX" name="phonenumber">
          </div>
          <div class="col">
            {{-- <label for="exampleInputPassword1" class="form-label">Post Code *</label> --}}
            <input type="hidden" class="form-control" value="{{$sid}}" placeholder="12345" name="serviceid">
            <input type="hidden" class="form-control" value="{{$date}}" placeholder="12345" name="date">
            <input type="hidden" class="form-control" value="{{$time}}" placeholder="12345" name="time">
          </div>
        </div>


</div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Your Address</label>
      <input type="text" class="form-control" value="{{Auth::user()->address}}" placeholder="Address" id="exampleInputPassword1">
    </div>

    <label for="comment">Order Note *</label>
    <textarea class="form-control" placeholder="Type order note" rows="5" id="comment" name="text"></textarea>






</div>


<div class="b">

  <button type="submit" class="btn text-light px-3" style="background-color: #1CBF73">Next</button>

</div>
</form>

@include('layouts.footer')
