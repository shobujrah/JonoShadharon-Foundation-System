@extends('backend.master')
@section('content')

<form action="{{route('store.donor')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter crisis name...">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text"  name="address" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address please">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date_of_Birth</label>
    <input type="date" name="date_of_birth" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Gender</label>
    <input type="text" name="gender" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   
   <div class="form-group">
    <label for="formGroupExampleInput2">Number</label>
    <input type="number" required name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection