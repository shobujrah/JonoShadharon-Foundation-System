@extends('backend.master')
@section('content')
<div class="container mt-3 p-3">

<h2>Donor List</h2><br>
<a href="{{route('create.donor')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Donor</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Date_of_Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($donor as $key=>$item)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->date_of_birth}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->phone}}</td>

      <td>

        <a class="btn btn-warning"  href="">Edit</a>
        <a  class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
     @endforeach
      </tbody>
       </table>

</div>

       @endsection
