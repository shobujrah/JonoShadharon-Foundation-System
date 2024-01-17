@extends('backend.master')
@section('content')

<div class="container mt-3 p-3">

<h1>Crisis Report</h1>


<form action="{{route('crisis.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</div>

</form>
<div id="crisisReport">

<h1>Report From - {{request()->from_date}} to  {{request()->to_date}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Adding Date</th>


        </tr>
        </thead>
         <tbody>
        @if(isset($crisis))
          @foreach($crisis as $key=>$item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->created_at}}</td>

        </tr>
        @endforeach
        @endif
        </tbody>


    </table>
</div>
<button onclick="printDiv('crisisReport')" class="btn btn-primary">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


</div>
@endsection
