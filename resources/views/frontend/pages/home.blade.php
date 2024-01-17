
@extends('frontend.master')

@section('content')



 <!-- header end -->
 <main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Donate for the poor people<br>and make the world happy.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s" >Here donate for the poor people when any crisis happen.Your Donation can save a life</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">

                                    <a class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>01851517065</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <!-- <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".1s">Our Helping to<br> the world.</h1>
                                <P data-animation="fadeInUp" data-delay=".2s" >Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut bore et dolore magnt, sed do eiusmod.</P>
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">Donate</a>
                                    <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>+12 1325 41</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- slider Area End-->

    <!--? About Law Start-->

    <!-- About Law End-->
    <!-- Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">

                        <h1 class="text-center"><strong>We work on Crises (The List of Crisis)</strong></h1>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($crisis as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                           <a class="p-1" href="{{route('crisis.details',$item->id)}}"><img style="weight:400px;height:220px;" src="{{asset('/public/uploads/'.$item->image)}}" alt="image"></a>
                        </div>
                        <div class="cases-caption">
                            <h3><a href="{{route('crisis.details',$item->id)}}">{{$item->name}}</a></h3>
                            <p>{{$item->description}}</p>
                            <div class="single-skill mb-15">
                                <div class="bar-progress">


                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> {{$item->amount_need}}-TK </span></p>
                                <p>Goal:<span>{{$item->goal}}-TK</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


                </div>
            </div>
        </div>
    </div>

{{-- donate  --}}


    <!--? Team Ara Start -->
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                       <h1 class="text-center"><strong>Volunteers Info</strong></h1>
                       <hr>
                    </div>
                </div>
            </div>
            <div class="row">

                    <div class="row">

                        @foreach ($volunteers as $item)
                        <div class="col-sm-6"><br>

                          <div class="card">

                            <div class="card-body">
                              <h1 class="card-title">Volunteer Name <strong> :{{$item->name}}</strong></h1>
                              <p>
                              <h3 class="card-text">Email :{{$item->email}} </h3>
                              <h3 class="card-text">Phone: :{{$item->phone}} </h3>
                              </p>
                              <!-- <a href="{{url('/')}}" class="btn btn-primary">Click here to go home</a> -->
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>

                </div>
            </div>
        </div>
    </div>
 >


{{-- loaction area --}}

    <section>
        <div class="container">
            <h1 class="text-center"><strong> Crisis Locations</strong></h1>
            <hr>
            <div class="row">
                @foreach ($locations as $value )
                <div class="col-md-4">
                    <div class="card mb-5">
                        <div class="card-header">
                            <div class="card-body">
                                <p class="text-black"><span>Crisis Name:</span>{{$value->crisisLocation->name}}</p>
                                <p class="text-black"> <span>Location:</span></span> {{$value->location}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>




    </main>
    @endsection

