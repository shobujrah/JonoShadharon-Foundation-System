@extends('frontend.master')

@section('content')


<!doctype html>
<html class="no-js" lang="zxx">




    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Donate Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Please fill out this form for Donation</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('donate.store') }}" method="post">
                            @csrf
                            <!-- Add a hidden input field to store the crisis_id -->
                            <input type="hidden" name="crisis_id" value="{{ $crisis->id }}">

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="phone" placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="address" id="address" type="text" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" id="Number" type="number" name="amount" placeholder="Amount">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="method" id="method" type="text" placeholder="Payment Method (*bKash,Nagad,Rocket,Bank payment & Cash System*) ">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="suggestion" id="message" cols="30" rows="9" placeholder="Write suggestion here..."></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button style="background-color: green;" type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Dhaka, Bangladesh.</h3>
                                <p>Dhaka 1206</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+88 01851517065</h3>
                                <p>Mon to Fri 8:00am to 10:00am</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@j.sshadharon@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>



</html>

@endsection
