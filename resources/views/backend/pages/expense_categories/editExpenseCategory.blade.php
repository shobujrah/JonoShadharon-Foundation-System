@extends('backend.master')
@section('content')

<form action="{{route('update.expense_category',$expense_category->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter crisis name...">
  </div>
  <div class="form-group">

  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" name="description" class="form-control" id="formGroupExampleInput2">
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
