@extends('backend.master')
@section('content')
<div class="container">
    <h1 class="text-center"><strong>Expense</strong></h1>
    <hr>
<form action="{{route('store.expense')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="formGroupExampleInput">Crisis Name</label>
        <select name="crisis_id" class="form-control" >
            @foreach ($crisis as $value )
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
      </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Amount</label>
    <input type="number" required name="amount" class="form-control" id="formGroupExampleInput" placeholder="Enter Amount...">
  </div>
  <div class="form-group">
    <label for="">Details</label>
    <input type="text" name="details" class="form-control" id="" placeholder="Enter details">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>




 </form>
</div>
 @endsection
