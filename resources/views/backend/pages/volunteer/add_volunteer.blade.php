@extends('backend.master');
@section('content')

<div class="mx-3 my-3">
    <h2>Volunteer Information</h2> <br>
    <form action="{{route('store.volunteer')}}" method="post">
        @csrf

        <div class="mb-3 ">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
        </div>
        <div class="mb-3 ">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
        </div>
        <div class="mb-3 ">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        </div>
        <div class="mb-3 ">
            <label for="">Contact</label>
            <input type="tel" name="contact" class="form-control" placeholder="Enter contact" required>
        </div>
        <div class="mb-3 ">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter address" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>

@endsection
