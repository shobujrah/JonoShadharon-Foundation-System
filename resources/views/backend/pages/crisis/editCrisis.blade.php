@extends('backend.master')
@section('content')



  <div class="container">
  <form action="{{route('update.crisis',$crisis->id)}}" method="post" enctype="multipart/form-data">

    @csrf


    <div class="form-group">
      <label for="formGroupExampleInput">Name</label>
      <input value="{{$crisis->name}}" type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter crisis name...">
    </div>
  <div class="form-group">
    <div class="form-group">
        <label for="">Crisis Category Name</label>
        <select name="crisisCategory_id" class="form-control" id="">
          @foreach ($crisisCategories as $value )
            <option  value="{{$value->id}}">{{$value->name}}</option>
          @endforeach
        </select>
      </div>

    <label for="">Description</label>
    <input value="{{$crisis->description}}" type="text" name="description" class="form-control" id="" placeholder="Enter description">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">From Date</label>
    <input value="{{$crisis->from_date}}" type="date" name="from_date" class="form-control" id="formGroupExampleInput2" placeholder=" Write please">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">To Date</label>
    <input value="{{$crisis->to_date}}" type="date" name="to_date" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   <div class="form-group">
    <label for="">Amount Need</label>
    <input value="{{$crisis->amount_need}}" type="number" name="amount_need" class="form-control" id="" placeholder=" ">
  </div>

  <div class="form-group">
    <label for="">Amount Goal *[NOTE: Amount Need & Amount Goal Input Should be same ]*</label>
    <input type="number" name="goal" class="form-control" id="" placeholder="Amount Need & Amount Goal Input Should be same ">
  </div>

  <div class="form-group">
    <label for="">Volunteers</label>
    <select name="volunteerUser_id" class="form-control" id="">
      @foreach ($volunteers as $value )
        <option  value="{{$value->id}}">{{$value->name}}</option>
      @endforeach
    </select>
  </div>


  <div class="form-group">
    <label for="">About_crisis</label>
    <input value={{$crisis->about_crisis}} type="text" name="about_crisis" class="form-control" id="" placeholder=" ">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input value={{$crisis->image}} type="file" name="image" class="form-control" id="formGroupExampleInput2">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>

@endsection


