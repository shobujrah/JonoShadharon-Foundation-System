@extends('backend.master')
@section('content')

<div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif
</div>
<div class="mx-3 my-3">
    <h2>Volunteer List</h2><br>
    <a href="{{route('add.volunteer')}}" class="btn btn-primary"> Volunteer</a>

<table class="table table-striped">
  <thead>


    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    <tr>
        @foreach ($volunteers as $key=>$volunteer)
      <th scope="row">{{$volunteers->firstitem()+$key}}</th>
      <td>{{$volunteer->name}}</td>
      <td>{{$volunteer->email}}</td>
      <td>{{$volunteer->phone}}</td>
      <td>{{$volunteer->address}}</td>


      <td>


        <a  class="btn btn-danger" href="{{route('volunteer.delete',$volunteer->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{$volunteers->links()}}
</div>

@endsection
