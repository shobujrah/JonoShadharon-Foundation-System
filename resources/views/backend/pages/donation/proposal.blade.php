@extends('backend.master')
@section('content')
<div class="container mt-3 p-3">

<h2>Donation Proposal List</h2>
<br> </br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Suggestion</th>

    </tr>
  </thead>
  <tbody>
  @foreach( $donations as $key=>$item)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->method}}</td>
      <td>{{$item->suggestion}}</td>

      <td>

      </td>
    </tr>
     @endforeach
      </tbody>
       </table>

</div>



@endsection
