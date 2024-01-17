@extends('backend.master')
@section('content')
<div class="container mt-3 p-3">
<h2>Expense Category List</h2><br>
<a href="{{route('create.expense_categories')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Expense Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col"> Expense Category Name</th>
      <th>Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($expense as $key=> $item)
    <tr>
      <th scope="row">{{$key+1}}</th>

      <td>{{$item->name}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->description}}</td>

      <td>
      <a class="btn btn-warning"href="{{route('expense_cat.edit',$item->id)}}">Edit</a>
      <a class="btn btn-danger"href="{{route('expense.category.delete',$item->id)}}" >Delete </a>

      </td>

    </tr>

    @endforeach

  </tbody>
</table>

@endsection
