@extends('backend.master')
@section('content')

<div class="container mt-3 p-3">
    <form action="{{route('category.store')}}" method="post">
        @csrf

        <div class="mb-3 ">
            <label for="">Crisis Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="crisis category name" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>


@endsection
