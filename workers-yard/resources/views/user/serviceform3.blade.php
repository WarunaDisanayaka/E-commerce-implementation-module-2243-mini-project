@include('layouts.gigheader')


<style>
    .con{
        margin: 50px;
    }

    .b{
        margin-left: 80%;
        
    }

</style>


<div class="con">

<form>
    <div class="mb-3">
      
            <div class="row">
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Your Nme *</label>
                <input type="text" class="form-control" placeholder="Saman" name="name">
              </div>
              <div class="col">
                <label for="exampleInputPassword1" class="form-label">Your Email *</label>
                <input type="email" class="form-control" placeholder="example@gmail.com" name="pswd">
              </div>
            </div>


    </div>


    <div class="mb-3">
      
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1" class="form-label">Phone Number *</label>
            <input type="number" class="form-control" placeholder="076 XXXXXXX" name="phonenumber">
          </div>
          <div class="col">
            <label for="exampleInputPassword1" class="form-label">Post Code *</label>
            <input type="number" class="form-control" placeholder="12345" name="pcode">
          </div>
        </div>


</div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Your Address</label>
      <input type="text" class="form-control" placeholder="Address" id="exampleInputPassword1">
    </div>

    <label for="comment">Order Note *</label>
    <textarea class="form-control" placeholder="Type order note" rows="5" id="comment" name="text"></textarea>

    
  </form>



</div>


<div class="b">
    <a href="{{url('serviceform2')}}"><button type="button" class="btn text-dark px-3"  style="border-color: #1CBF73">back</button></a>
  <button type="submit" class="btn text-light px-3" style="background-color: #1CBF73">Next</button>
 
</div>

@include('layouts.footer')