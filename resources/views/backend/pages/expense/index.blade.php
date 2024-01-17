@extends('backend.master')
@section('content')
<div class="container mt-3 p-3">
<h2>Expense List</h2><br>
<a href="{{route('create.expense')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Expense</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Crisis Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
 <tbody>
  @foreach($expenses as $key=>$item)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->crisis->name}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->details}}</td>

      <td>

        <a class="btn btn-warning"  href="{{route('expense.edit',$item->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('expense.delete',$item->id)}}">Delete</a>
      </td>
    </tr>
     @endforeach
      </tbody>
</table>

</div>
@endsection
