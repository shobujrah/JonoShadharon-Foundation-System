
@extends('frontend.master');

@section('content')
<br><br><br><section>
    <div class="container">
        <h1 class="text-center"><strong>Donor Info</strong></h1>
        <hr>
        <div class="row">
           @foreach ($donor as $value )
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-header">
                         <div class="card-body">
                            <p class="text-black"><span>Donor Name:</span> <strong>{{$value->name}}</strong> </p>
                            <p class="text-black"> <span>Donar Address:</span></span> {{$value->address}}</p>
                            <p class="text-black"><span>Donor Date of Birth:</span> <strong>{{$value-> date_of_birth}}</strong> </p>
                            <p class="text-black"> <span>Donor Gender:</span></span> {{$value->gender}}</p>
                            <p class="text-black"><span>Donor Phone:</span> <strong>{{$value->phone}}</strong> </p>

                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
</section>

@endsection
