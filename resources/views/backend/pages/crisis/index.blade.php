@extends('backend.master')
@section('content')
<div class="mx-3 my-3">
<h2>Crisis List</h2><br>
<a href="{{route('create.crisis')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Crisis</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Crisis Category Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Goal</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Volunteer Name</th>
      <th scope="col">About Crisis</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

            @foreach ($crises as $key=>$value )
            <tr>
                <th scope="row">{{$key+1}}</th>
                {{-- <td>{{$value->}}</td> --}}
                <td>{{$value->name}}</td>
                <td>{{$value->category->name}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->description}}</td>
                <td>{{$value->goal}}</td>
                <td>{{$value->amount_need}}</td>
                <td>{{$value->volunteer->name}}</td>
                <td>{{$value->about_crisis}}</td>
                <td>
                    <img
                    style="weight:100px;
                            height:100px;"
                    src="{{url('public/uploads/',$value->image)}}" alt="image">
                </td>
                <td>
                    <a  class="btn btn-warning" href="{{route('crisis.edit',$value->id)}}">edit</a>
                <a  class="btn btn-danger" href="{{route('crisis.delete',$value->id)}}">delete</a>
                </td>
            </tr>

            @endforeach

  </tbody>
</table>

{{-- {{$crises->links()}} --}}

</div>

@endsection
