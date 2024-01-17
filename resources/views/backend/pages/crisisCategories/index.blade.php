@extends('backend.master')
@section('content')


<div class="container mt-3 p-3">
<h2>Crisis Category List</h2><br>
    <a href="{{route('category.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Crisis Category</a>
<table class="table table-striped">

<br> </br>
  <thead>

    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


        @foreach($catData  as $cat=>$category )
        <tr>
            <td>{{++$cat}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
            <td>
                <a  class="btn btn-warning" href="{{route('crisis.category.edit',$category->id)}}">edit</a>
                <a  class="btn btn-danger" href="{{route('crisis.category.delete',$category->id)}}">delete</a>
            </td>
        </tr>
        @endforeach


  </tbody>
</table>
</div>
@endsection
