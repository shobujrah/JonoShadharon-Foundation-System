@extends('backend.master')
@section('content')


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">

                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Volunteers</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       <span>{{$volunteers}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Crisis</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span>{{$crisis}}</span>

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Donor</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span>{{$donor}}</span>

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">


                        </div>

                    </div>
                @endsection
