@extends('layouts.seller')

@section('content')
<br><br>
    <div class="container">
        <div class="row">
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
                    <br><br>
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
