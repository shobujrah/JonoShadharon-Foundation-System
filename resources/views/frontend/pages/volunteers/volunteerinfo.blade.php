
@extends('frontend.master');

@section('content')
<br><br><br><section>
    <div class="container">
        <h1 class="text-center"><strong>Volunteer Info</strong></h1>
        <hr>
        <div class="row">
           @foreach ($volunteers as $value )
            <div class="col-sm-6">
                <div class="card mb-5">
                    <div class="card-header">
                         <div class="card-body">

                         <h1 class="card-title">Volunteer Name <strong> :{{$value->name}}</strong></h1>
                         <p>
                              <h3 class="card-text">Email :{{$value->email}} </h3>
                              <h3 class="card-text">Phone: :{{$value->phone}} </h3>
                              </p>

                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
</section>

@endsection
