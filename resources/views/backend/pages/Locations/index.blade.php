@extends('backend.master')
@section('content')

<div class="container">
    <!-- <h1><strong>Location</strong></h1>
    <br> <br> -->
    <div class="container mt-3 p-3">
    <h2>Location List</h2><br>

    <a class="btn btn-primary" href="{{route('location.create')}}">Create Location</a>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Crisis Name</th>
                <th>Location Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $value )
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->crisisLocation->name}}</td>
                <td>{{$value->location}}</td>
                <td>
                    <a  class="btn btn-danger" href="{{route('location.delete',$value->id)}}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
