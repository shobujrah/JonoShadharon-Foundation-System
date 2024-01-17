@extends('backend.master')



@section('content')
        <div class="conatiner">
            <h1>Create Location from</h1>
            <hr>
            <form action="{{route('location.store')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="">Crisis Name</label>
                    <select name="crisis_id" class="form-control" id="">
                       @foreach ($crisisData as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Location Name</label>
                    <input type="text" name="location" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
@endsection
