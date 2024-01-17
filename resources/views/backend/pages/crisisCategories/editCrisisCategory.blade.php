@extends('backend.master')
@section('content')

<div class="container mt-3 p-3">
    <form action="{{route('update.crisis.category',$catData->id)}}" method="post">
        @csrf

        <div class="mb-3 ">
            <label for="">Crisis Category Name</label>
            <input value="{{$catData->name}}" type="text" name="name" class="form-control" placeholder="crisis category name" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>

    </form>
</div>


@endsection
