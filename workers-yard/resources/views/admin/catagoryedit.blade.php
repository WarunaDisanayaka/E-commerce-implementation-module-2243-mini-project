@extends('layouts.main')

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
                @foreach ($catagories as $c)
                <form action="{{route('catagory.update', $c->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Catagory:</label>
                            <input type="text" class="form-control" id="catagory" value="{{$c->catagory}}" name="catagory">
                        </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                  @endforeach
            </div>


        </div>
    </div>

@endsection
