@extends('frontend.master');



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-5 p3">
                <div class="card-header">
                    <div class="card-body">
                        <form action="{{route('registration.store')}}" method="POST">

                            @csrf
                            <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Volunteer name...">
                            </div>

                            <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="email" required name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email please">
                            </div>

                            <div class="form-group">
                            <label for="formGroupExampleInput2">Phone</label>
                            <input type="number" required name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
                            @error('phone')

                            <strong class="text-danger">{{$message}}</strong>

                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Address</label>
                                <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address please">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
